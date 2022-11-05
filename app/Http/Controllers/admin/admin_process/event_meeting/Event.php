<?php

namespace App\Http\Controllers\admin\admin_process\event_meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\event_meeting\EventModel;
use Yajra\DataTables\DataTables;
use DB;


class Event extends Controller
{
    public function events()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $vendor = get_vendor_name_and_id();
        return view('admin_process.event_meeting.event', compact('company', 'employee', 'vendor'));
    }

    public function store_events(Request $request)
    {

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'event' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/events'), $file_name);
        } else {
            $file_name = '';
        }
        EventModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'event_date' => $request->event_date,
            'event_type' => $request->event_type,
            'event_proposer_employee' => $request->event_proposer_employee,
            'event_coordinator_employee' =>  implode(',', $request->event_coordinator_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_amount' => $request->estimate_amount,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'approve_amount' => $request->approve_amount,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'event_id' => $request->event_id,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_events(Request $request)
    {
        EventModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_events(Request $request)
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
        EventModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'event_date' => $request->event_date,
            'event_type' => $request->event_type,
            'event_proposer_employee' => $request->event_proposer_employee,
            'event_coordinator_employee' => implode(',', $request->event_coordinator_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_amount' => $request->estimate_amount,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'approve_amount' => $request->approve_amount,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'event_id' => $request->event_id,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_events(Request $request)
    {
        $data = DB::table('events')
            ->where('events.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_events()
    {
        $data = DB::table('events')
            ->join('companies', 'companies.id', '=', 'events.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'events.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'events.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'events.event_proposer_employee')
            ->select('events.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee')
            ->orderby('events.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'event_date', 'event_type', 'event_coordinator_employee', 'vendor_id', 'estimate_amount',  'approve_by', 'approve_date',                'approve_amount', 'file',  'event_id', 'action'
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
            ->addColumn('event_date', function ($data) {
                return $data->event_date;
            })
            ->addColumn('event_type', function ($data) {
                return $data->event_type;
            })

            ->addColumn('event_proposer_employee', function ($data) {
                return $data->proposer_employee;
            })
            ->addColumn('event_coordinator_employee', function ($data) {
                $employee_name = '';
                $loop = explode(',', $data->event_coordinator_employee);
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
                return $data->file ? '<a target="_blank" href="'.asset('public/uploads/admin-process/events/'.$data->file).'"><label class="text-primary">'.$data->file.'</label></a>' : 'N/A';        

            })
            ->addColumn('event_id', function ($data) {
                return $data->event_id;
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
