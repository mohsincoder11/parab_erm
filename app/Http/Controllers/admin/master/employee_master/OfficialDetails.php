<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\OfficialDetailModel;
use DB;
use Yajra\DataTables\DataTables;



class OfficialDetails extends Controller
{
    public function official_details()
    {
        $employee_status = get_employee_status();
        $department = get_department_name_and_id();
        $designation = get_designation_and_id();
        $grade = get_grade_and_id();
        $project = get_project_name_and_id();
        $location = get_location_name_and_id();
        return view('masters.employee_masters.officialdetails', compact('employee_status', 'department', 'designation', 'grade', 'project', 'location'));
    }
    
    public function store_official_details(Request $request)
    {
        OfficialDetailModel::create([
            'emp_code' => $request->emp_code,
            'emp_status_id' => $request->emp_status_id,
            'date_joining' => date('Y-m-d', strtotime($request->date_joining)),
            'date_conform' => date('Y-m-d', strtotime($request->date_conform)),
            'date_leaving' => date('Y-m-d', strtotime($request->date_leaving)),
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'grade_id' => $request->grade_id,
            'project_id' => $request->project_id,
            'location_id' => $request->location_id,
            'reporting_manager' => $request->reporting_manager,
            'official_mob_no' => $request->official_mob_no,
            'official_mail_id' => $request->official_mail_id,
            'working_hr' => $request->working_hr,

        ]);

        return back()->with('success', 'Record added successfully.');
    }
    public function edit_official_details(Request $request)
    {
        $official_detail=OfficialDetailModel::where('id', $request->id)->first();
        return response()->json($official_detail);
    }
    public function update_official_details(Request $request)
    {
        OfficialDetailModel::where('id', $request->id)->update([
            'emp_code' => $request->emp_code,
            'emp_status_id' => $request->emp_status_id,
            'date_joining' => date('Y-m-d', strtotime($request->date_joining)),
            'date_conform' => date('Y-m-d', strtotime($request->date_conform)),
            'date_leaving' => date('Y-m-d', strtotime($request->date_leaving)),
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'grade_id' => $request->grade_id,
            'project_id' => $request->project_id,
            'location_id' => $request->location_id,
            'reporting_manager' => $request->reporting_manager,
            'official_mob_no' => $request->official_mob_no,
            'official_mail_id' => $request->official_mail_id,
            'working_hr' => $request->working_hr,

        ]);

        return back()->with('success', 'Record updated successfully.');
    }
    public function delete_official_details(Request $request)
    {
        OfficialDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function get_official_details(Request $request)
    {
        $data = DB::table('employee_official_details')
            ->join('employee_status_master', 'employee_status_master.id', '=', 'employee_official_details.emp_status_id')
            ->join('locations', 'locations.id', '=', 'employee_official_details.location_id')
            ->join('projects', 'projects.id', '=', 'employee_official_details.project_id')
            ->join('designations', 'designations.id', '=', 'employee_official_details.designation_id')
            ->join('departments', 'departments.id', '=', 'employee_official_details.department_id')
            ->join('grades', 'grades.id', '=', 'employee_official_details.grade_id')
            ->select('employee_official_details.*', 'employee_status_master.employee_status_name', 'locations.location_name', 'projects.project', 'designations.designation', 'grades.grade_name', 'departments.department')
            ->orderby('employee_official_details.id', 'desc')
            ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'employee_status_name', 'date_joining', 'date_conform', 'date_leaving', 'department', 'designation', 'grade_name', 'project', 'location_name', 'reporting_manager', 'official_mob_no', 'official_mail_id',
                'working_hr', 'action'
            ])
            ->addColumn('employee_status_name', function ($data) {
                return $data->employee_status_name;
            })
            ->addColumn('date_joining', function ($data) {
                return $data->date_joining;
            })
            ->addColumn('date_conform', function ($data) {
                return $data->date_conform;
            })
            ->addColumn('date_leaving', function ($data) {
                return $data->date_leaving;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
            ->addColumn('designation', function ($data) {
                return $data->designation;
            })
            ->addColumn('grade_name', function ($data) {
                return $data->grade_name;
            })

            ->addColumn('project', function ($data) {
                return $data->project;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('reporting_manager', function ($data) {
                return $data->reporting_manager;
            })
            ->addColumn('official_mob_no', function ($data) {
                return $data->official_mob_no;
            })
            ->addColumn('official_mail_id', function ($data) {
                return $data->official_mail_id;
            })
            ->addColumn('working_hr', function ($data) {
                return $data->working_hr;
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
