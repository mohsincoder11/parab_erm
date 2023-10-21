<?php

namespace App\Http\Controllers\admin\admin_process\event_meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\event_meeting\MeetingModel;
use App\Models\admin_process\event_meeting\MeetingItemsDetailsModel;

use Yajra\DataTables\DataTables;
use DB;
class Meeting extends Controller
{
    public function meeting()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $vendor = get_vendor_name_and_id();
        return view('admin_process.event_meeting.meeting', compact('company', 'employee', 'vendor'));
    }

    public function store_meeting(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'meeting' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/meeting'), $file_name);
        } else {
            $file_name = '';
        }
        $MeetingModel = MeetingModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'meeting_date' => $request->meeting_date,
            'meeting_type' => $request->meeting_type,
            'meeting_proposer_employee' => $request->meeting_proposer_employee,
            'meeting_participant_employee' =>  implode(',', $request->meeting_participant_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_amount' => $request->estimate_amount,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'approve_amount' => $request->approve_amount,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'meeting_id' => $request->meeting_id,
        ]);

        foreach($request->perticular as $key => $perticular)
        {
            MeetingItemsDetailsModel::create([          
                'meetings_id' => $MeetingModel->id,
                'perticular' => $perticular,
                'price' => $request->price[$key]            
            ]);
        }
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_meeting(Request $request)
    {
        MeetingModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_meeting(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'meeting' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/meeting'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        MeetingModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'meeting_date' => $request->meeting_date,
            'meeting_type' => $request->meeting_type,
            'meeting_proposer_employee' => $request->meeting_proposer_employee,
            'meeting_participant_employee' => implode(',', $request->meeting_participant_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_amount' => $request->estimate_amount,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'approve_amount' => $request->approve_amount,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'meeting_id' => $request->meeting_id,

        ]);

        MeetingItemsDetailsModel::where('events_id',$request->id)->delete();         

        foreach($request->perticular as $key => $perticular)
        {
            MeetingItemsDetailsModel::create([          
                'meetings_id' =>$request->id,
                'perticular' => $perticular,
                'price' => $request->price[$key]            
            ]);
        }

        
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_meeting(Request $request)
    {
        $data['first'] = DB::table('meetings')
            ->where('meetings.id', $request->id)
            ->first();
        $data['second']=DB::table('meetings_items_detail')
            ->where('meetings_id', $data['first']->id)
            ->get();
        return response()->json($data);
    }

    public function get_meeting()
    {
        $data = DB::table('meetings')
            ->join('companies', 'companies.id', '=', 'meetings.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'meetings.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'meetings.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'meetings.meeting_proposer_employee')
            ->select('meetings.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee')
            ->orderby('meetings.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'meeting_date', 'meeting_type', 'meeting_participant_employee', 'vendor_id', 'estimate_amount',  'approve_by', 'approve_date','approve_amount', 'file',  'meeting_id', 'action'
            ])

            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
            ->addColumn('meeting_date', function ($data) {
                return $data->meeting_date;
            })
            ->addColumn('meeting_type', function ($data) {
                return $data->meeting_type;
            })

            ->addColumn('meeting_proposer_employee', function ($data) {
                return $data->proposer_employee;
            })
            ->addColumn('meeting_participant_employee', function ($data) {
                $employee_name = '';
                $loop = explode(',', $data->meeting_participant_employee);
                foreach ($loop as $emp) {

                    $employee_name .= get_employee_name($emp) . ', ';
                }

                return $employee_name;
            })
            ->addColumn('vendor_id', function ($data) {
                $vendor_name = '';
                $loop = explode(',', $data->vendor_id);
                foreach ($loop as $emp) {

                    $vendor_name .= get_vendor_name($emp) . ', ';
                }

                return $vendor_name;
            })

            ->addColumn('approve_by', function ($data) {
                return $data->approve_by;
            })
            ->addColumn('approve_date', function ($data) {
                return $data->approve_date;
            })
            ->addColumn('approve_amount', function ($data) {
                return $data->approve_amount;
            })
            ->addColumn('file', function ($data) {
                return $data->file ? '<a target="_blank" href="'.asset('public/uploads/admin-process/meeting/'.$data->file).'"><label class="text-primary">'.$data->file.'</label></a>' : 'N/A';        

            })
            ->addColumn('meeting_id', function ($data) {
                return $data->meeting_id;
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
