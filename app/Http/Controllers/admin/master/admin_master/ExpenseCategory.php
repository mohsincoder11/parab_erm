<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\ExpenseCategoryModel;
use DB;
use Yajra\DataTables\DataTables;
use App\Department;
use App\Location;
use App\Models\employee_master\OfficialDetailModel;
use App\Models\employee_master\PersonalDetailModel;

class ExpenseCategory extends Controller
{
    public function expenses_category()
    {
        $company = get_company_name_and_id();

        return view('masters.admin_master.expenses_category', compact('company'));
    }

    public function store_expenses_category(Request $request)
    {
        ExpenseCategoryModel::create([
            'category' => $request->category,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_expenses_category(Request $request)
    {
        ExpenseCategoryModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_expenses_category(Request $request)
    {
        ExpenseCategoryModel::where('id', $request->id)->update([
            'category' => $request->category,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_expenses_category(Request $request)
    {
        $data = DB::table('expenses_category')
            ->where('expenses_category.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_expenses_category_record()
    {
        $data = DB::table('expenses_category')
            ->join('companies', 'companies.id', '=', 'expenses_category.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'expenses_category.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'expenses_category.department_id')
            ->select('expenses_category.*','expenses_category.category', 'locations.location_name', 'departments.department', 'companies.company_name')
            ->orderby('expenses_category.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['category','company_name', 'location_name', 'department', 'action'])
            ->addColumn('category', function ($data) {
                return $data->category;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name ?? 'N/A';
            })
            ->addColumn('department', function ($data) {
                return $data->department ?? 'N/A';
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

    public function get_department_location_by_company(Request $request)
    {
        $location = Location::select('location_name', 'id')
            ->orderby('location_name', 'asc')
            ->where('company_id', $request->company_id)
            ->get();;
        $department = Department::select('department', 'id')
            ->orderby('department', 'asc')
            ->where('company_id', $request->company_id)
            ->get();;
          
            $emp_name = PersonalDetailModel::select('employee_name', 'id')
            ->orderby('employee_name', 'asc')
            ->where('company_id', $request->company_id)
            ->get();;    
        return response()->json(['location' => $location, 'department' => $department, 'emp_name' => $emp_name]);
    }
}
