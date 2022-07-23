<?php

namespace App\Http\Controllers;

use App\Models\Hr_master\EmployeeStatusModel;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;


class EmployeeStatus extends Controller
{
    public function employee_status()
    {
        $project = get_project_name_and_id();
        $location = get_location_name_and_id();
        return view('masters.hr_masters.employee_status', compact('project', 'location'));
    }
    public function store_employee_status(Request $request)
    {
        EmployeeStatusModel::create([
            'employee_status_name' => $request->employee_status_name,
            'company_id' => $request->company_id,
            'project_id' => $request->project_id,
            'location_id' => $request->location_id,
            'status_type' => $request->status_type,
            'working_hour' => $request->working_hour,

        ]);

        return back()->with('success', 'Record added successfully.');
    }
    public function edit_employee_status(Request $request)
    {
        $official_detail = EmployeeStatusModel::where('id', $request->id)->first();
        return response()->json($official_detail);
    }
    public function update_employee_status(Request $request)
    {
        EmployeeStatusModel::where('id', $request->id)->update([
            'employee_status_name' => $request->employee_status_name,
            'company_id' => $request->company_id,
            'project_id' => $request->project_id,
            'location_id' => $request->location_id,
            'status_type' => $request->status_type,
            'working_hour' => $request->working_hour,

        ]);

        return back()->with('success', 'Record updated successfully.');
    }
    public function delete_employee_status(Request $request)
    {
        EmployeeStatusModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function get_employee_status(Request $request)
    {
        $data = DB::table('employee_status')
            ->leftjoin('companies', 'companies.id', '=', 'employee_status.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'employee_status.location_id')
            ->leftjoin('projects', 'projects.id', '=', 'employee_status.project_id')
            ->select('employee_status.*', 'locations.location_name', 'projects.project', 'companies.company_name')
            ->orderby('employee_status.id', 'desc')
            ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                 'employee_status_name','company_name','location_name','project','status_type',
                'working_hour', 'action'
            ])
            ->addColumn('employee_status_name', function ($data) {
                return $data->employee_status_name;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })       

            ->addColumn('project', function ($data) {
                return $data->project ?? 'N/A';
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name ?? 'N/A';
            })
            ->addColumn('status_type', function ($data) {
                return $data->status_type ?? 'N/A';
            })
           
            ->addColumn('working_hour', function ($data) {
                return $data->working_hour ?? 'N/A';
            })

            ->addColumn('action', function ($data) {
                return '<a class="edit" id="' . $data->id . '" data-toggle="modal" data-placement="top"
            title="Edit" data-toggle="modal" data-target=".add-edit_modal" ><svg
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
