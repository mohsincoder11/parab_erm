<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\VendorCategoryModel;
use App\Models\admin_master\ExpenseCategoryModel;

use DB;
use Yajra\DataTables\DataTables;
use App\Department;
use App\Location;

class VendorCategory extends Controller
{
    public function vendor_category()
    {
        $company = get_company_name_and_id();
        $expense_category = ExpenseCategoryModel::select('id','category')->orderBy('id','desc')->get();
        

        return view('masters.admin_master.vendor_category', compact('company','expense_category'));
    }

    public function store_vendor_category(Request $request)
    {
        VendorCategoryModel::create([
            'vendor_category_name' => $request->vendor_category_name,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'expense_category_id' => $request->expense_category_id,
            'unit_of_supply' => $request->unit_of_supply,

        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_vendor_category(Request $request)
    {
        VendorCategoryModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_vendor_category(Request $request)
    {
        VendorCategoryModel::where('id', $request->id)->update([
            'vendor_category_name' => $request->vendor_category_name,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'expense_category_id' => $request->expense_category_id,
            'unit_of_supply' => $request->unit_of_supply,
    ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_vendor_category(Request $request)
    {
        $data = DB::table('vendor_category')
            ->where('vendor_category.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_vendor_category_record()
    {
        $data = DB::table('vendor_category')
            ->join('companies', 'companies.id', '=', 'vendor_category.company_id')
            ->join('locations', 'locations.id', '=', 'vendor_category.location_id')
            ->join('departments', 'departments.id', '=', 'vendor_category.department_id')
            ->join('expenses_category', 'expenses_category.id', '=', 'vendor_category.expense_category_id')
            ->select('vendor_category.*','locations.location_name', 'departments.department', 'companies.company_name','expenses_category.category')
            ->orderby('vendor_category.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['vendor_category_name','category','company_name', 'location_name', 'department', 'unit_of_supply','action'])
            ->addColumn('vendor_category_name', function ($data) {
                return $data->vendor_category_name;
            })
            ->addColumn('category', function ($data) {
                return $data->category;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
             ->addColumn('unit_of_supply', function ($data) {
                return $data->unit_of_supply;
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
