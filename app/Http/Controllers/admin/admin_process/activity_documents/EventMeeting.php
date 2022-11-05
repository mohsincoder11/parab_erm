<?php

namespace App\Http\Controllers\admin\admin_process\activity_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\event_meeting\EventModel;
use App\Models\admin_process\event_meeting\MeetingModel;
use App\Models\admin_process\activity_document\EventMeetingModel;
use Yajra\DataTables\DataTables;
use DB;

class EventMeeting extends Controller
{
    public function event_meeting()
    {
        $company = get_company_name_and_id();
        $event_id = EventModel::select('id', 'event_id as event_meeting_id')->get();
        $employee = get_employee_name_and_id();

        $meeting_id = MeetingModel::select('id', 'meeting_id as event_meeting_id')->get();

        return view('admin_process.activity_documents.event_meeting', compact('company', 'employee', 'event_id', 'meeting_id'));
    }

    public function store_event_meeting(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'event' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/activity-document'), $file_name);
            EventMeetingModel::create([
                'company_id' => $request->company_id,
                'location_id' => $request->location_id,
                'department_id' => $request->department_id,
                'event_meeting_date' => $request->event_meeting_date,
                'meeting_proposer_employee' => $request->meeting_proposer_employee,
                'meeting_participant_employee' => implode(',', $request->meeting_participant_employee),
                'file' => $file_name,
                'remark' => $request->remark,

            ]);
            return back()->with('success', 'Record added successfully.');
        } else {
            return back()->with('error', 'Please  fill all the details.');
        }
    }

    public function delete_event_meeting(Request $request)
    {
        EventMeetingModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_event_meeting(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'event' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/activity-document'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        EventMeetingModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'event_meeting_date' => $request->event_meeting_date,
            'meeting_proposer_employee' => $request->meeting_proposer_employee,
            'meeting_participant_employee' => implode(',', $request->meeting_participant_employee),
            'file' => $file_name,
            'remark' => $request->remark,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_event_meeting(Request $request)
    {
        $data = DB::table('event_meeting')
            ->where('event_meeting.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_event_meeting()
    {
        $data = DB::table('event_meeting')
            ->join('companies', 'companies.id', '=', 'event_meeting.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'event_meeting.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'event_meeting.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'event_meeting.meeting_proposer_employee')

            ->select('event_meeting.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as meeting_proposer_employee')
            ->orderby('event_meeting.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'meeting_proposer_employee', 'meeting_participant_employee', 'event_meeting_date', 'file', 'remark', 'action'
            ])

            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name ?? 'N/A';
            })

            ->addColumn('department', function ($data) {
                return  $data->department ?? 'N/A';
            })
            ->addColumn('event_meeting_date', function ($data) {
                return  $data->event_meeting_date ?? 'N/A';
            })

            ->addColumn('meeting_proposer_employee', function ($data) {
                return $data->meeting_proposer_employee;
            })
            ->addColumn('meeting_participant_employee', function ($data) {
                $employee_name = '';
                $loop = explode(',', $data->meeting_participant_employee);
                foreach ($loop as $emp) {
                    $employee_name .= get_employee_name($emp) . ', ';
                }

                return $employee_name;
            })
            ->addColumn('file', function ($data) {
                return $data->file ? '<a target="_blank" href="' . asset('public/uploads/admin-process/activity-document/' . $data->file) . '"><label class="text-primary">' . $data->file . '</label></a>' : 'N/A';
            })
            ->addColumn('remark', function ($data) {
                return $data->remark ?? 'N/A';
            })

            ->addColumn('action', function ($data) {
                return '<a class="edit" id="' . $data->id . '" data-toggle="modal" data-placement="top"
                title="Edit" data-toggle="modal" data-target=".add-edit_modal"><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-edit-2 text-success">
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
        </svg></a>

    <a class="delete" id="' . $data->id . '" data-toggle="tooltip" data-placement="top"
        title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-trash-2 text-danger">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path
                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
            </path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
        </svg></a>';
            })
            ->make(true);
        return response()->json(1);
    }
}
