<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Project;
use App\Employee;
use App\Department;
use App\Officeshift;
use App\Designation;

class EmployeeController extends Controller
{
    public function employee()
    {

        $data['companies'] = Company::all();
        $data['employees'] = Employee::leftjoin('projects', 'projects.id', 'employees.project_id')
            ->leftjoin('companies', 'companies.id', 'employees.company_id')
            ->leftjoin('departments', 'departments.id', 'employees.department_id')
            ->leftjoin('designations', 'designations.id', 'employees.designation_id')
            ->leftjoin('officeshifts', 'officeshifts.id', 'employees.shift_id')
            ->select(
                'employees.*',
                'projects.project',
                'companies.company_name',
                'departments.department',
                'designations.designation',
                'officeshifts.shift_name'
            )->get();

        return view('employee.index', $data);
    }
    public function fetchCompanyBasedData(Request $request)
    {

        $data['projects'] = Project::where('company_id', $request->company_id)->get();
        $data['departments'] = Department::where('company_id', $request->company_id)->get();
        $data['designations'] = Designation::where('company_id', $request->company_id)->get();
        $data['officeshifts'] = Officeshift::where('company_id', $request->company_id)->get();

        return json_encode($data);
    }

    public function store(Request $request)
    {
        $result = Employee::create([
            'employeeID' => $request->employee_id,
            'full_name' => $request->full_name,
            'fathers_name' => $request->father_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'emergency_phone' => $request->emergency_phone,
            'gender' => $request->gender,
            'company_id' => $request->company_id,
            'project_id' => $request->project_id,
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'shift_id' => $request->officeshift_id
        ]);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    public function delete(Request $request)
    {
        $result = Employee::find($request->id)->delete();

        return response()->json(['success' => __('Data is successfully deleted')]);
    }

    public function view(Request $request)
    {

        $data['basic'] = Employee::find($request->id);

        return view('employee.view_employee.employee_menu', $data);
    }

    public function basicinfo(Request $request)
    {
        $basicinfo = Employee::find($request->id);
        $companies = Company::all();
        $reporting = Employee::where('id', '!=', $basicinfo->id)
            ->where('company_id', $basicinfo->company_id)
            ->where('project_id', $basicinfo->project_id)
            ->where('department_id', $basicinfo->department_id)->get();
        $projects = Project::where('company_id', $basicinfo->company_id)->get();
        $departments = Department::where('company_id', $basicinfo->company_id)->get();
        $designations = Designation::where('company_id', $basicinfo->company_id)->get();
        $officeshifts = Officeshift::where('company_id', $basicinfo->company_id)->get();
        return response()->json(['companies' => $companies, 'basicinfo' => $basicinfo, 'projects' => $projects, 'departments' => $departments, 'designations' => $designations, 'officeshifts' => $officeshifts, 'reporting' => $reporting]);
    }

    public function updatebasicinfo(Request $request)
    {
        $result = Employee::whereId($request->hidden_id)->update([
            'employeeID' => $request->employeeID,
            'full_name' => $request->full_name,
            'fathers_name' => $request->fathers_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'emergency_phone' => $request->emergency_phone,
            'gender' => $request->gender,
            'company_id' => $request->company_id,
            'project_id' => $request->project_id,
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'shift_id' => $request->shift_id,
            'permanent_address' => $request->permanent_address,
            'present_address' => $request->present_address,
            'dob' => $request->dob,
            'city' => $request->city,
            'blood_group' => $request->blood_group,
            'state' => $request->state,
            'joining_date' => $request->joining_date,
            'leaving_date' => $request->leaving_date,
            'confirmation_date' => $request->confirmation_date,
            'reporting_to' => $request->reporting_to
        ]);

        return response()->json(['success' => 'Data updated successfully.']);
    }

    public function get_employee_by_company(Request $request){
        $employee=get_employee_name_and_id($request->company_id);
        return response()->json($employee);
    }
}
