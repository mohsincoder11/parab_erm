<?php

namespace App\Http\Controllers\admin\admin_process\activity_documents;
use App\Models\admin_process\event_meeting\EventModel;
use App\Models\admin_process\event_meeting\MeetingModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\activity_document\TravelAllowanceModel;

use Yajra\DataTables\DataTables;
use DB;
class TravelAllowance extends Controller
{
    public function travel_allowance()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $event_id=EventModel::select('id','event_id as event_meeting_id')->get();
        $meeting_id=MeetingModel::select('id','meeting_id as event_meeting_id')->get();

        return view('admin_process.activity_documents.travel_allowance', compact('company','employee', 'event_id','meeting_id'));
    }

    public function store_travel_allowance(Request $request)
    {


        TravelAllowanceModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'employee_id' => $request->employee_id,
            'event_meeting_id' => $request->event_meeting_id,
            'travel_date' => $request->travel_date,
            'travel_details' => $request->travel_details,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'remark' => $request->remark,

        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_travel_allowance(Request $request)
    {
        TravelAllowanceModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_travel_allowance(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'event' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/events'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        TravelAllowanceModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'employee_id' => $request->employee_id,
            'event_meeting_id' => $request->event_meeting_id,
            'travel_date' => $request->travel_date,
            'travel_details' => $request->travel_details,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'remark' => $request->remark,


        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_travel_allowance(Request $request)
    {
        $data = DB::table('travel_allowance')
            ->where('travel_allowance.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_travel_allowance()
    {
        $data = DB::table('travel_allowance')
            ->join('companies', 'companies.id', '=', 'travel_allowance.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'travel_allowance.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'travel_allowance.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'travel_allowance.employee_id')

            ->select('travel_allowance.*', 'locations.location_name','departments.department', 'companies.company_name', 'employees.full_name as employee')
            ->orderby('travel_allowance.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name','department', 'employee','travel_date', 'travel_details','approve_by', 'approve_date', 'remark', 'action'
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
            ->addColumn('employee', function ($data) {
                return  $data->employee ?? 'N/A';
            })
            ->addColumn('travel_date', function ($data) {
                return $data->travel_date;
            })
            ->addColumn('travel_details', function ($data) {
                return $data->travel_details;
            })
            ->addColumn('approve_by', function ($data) {
                return $data->approve_by;
            })

            ->addColumn('approve_date', function ($data) {
                return $data->approve_date;
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
