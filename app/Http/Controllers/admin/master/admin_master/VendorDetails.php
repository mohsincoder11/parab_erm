<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\VendorDetailsModel;
use App\Models\admin_master\ExpenseCategoryModel;
use App\Models\admin_master\VendorCategoryModel;

use DB;
use Yajra\DataTables\DataTables;
use App\Department;
use App\Location;

class VendorDetails extends Controller
{
    public function vendor_details()
    {
        $company = get_company_name_and_id();
        $expense_category = ExpenseCategoryModel::select('id', 'category')->orderBy('id', 'desc')->get();
        $vendor_category = VendorCategoryModel::select('id', 'vendor_category_name')->orderBy('id', 'desc')->get();

        return view('masters.admin_master.vendor_details', compact('company', 'expense_category', 'vendor_category'));
    }

    public function store_vendor_details(Request $request)
    {
        VendorDetailsModel::create([
            'vendor_name' => $request->vendor_name,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'expense_category_id' => $request->expense_category_id,
            'vendor_category_id' => $request->vendor_category_id,
            'address' => $request->address,
            'pan' => $request->pan,
            'gst_no' => $request->gst_no,
            'contact_no' => $request->contact_no,
            'contact_person' => $request->contact_person,
            'unit_of_supply' => $request->unit_of_supply,
            'vendor_code' => $request->vendor_code,
            'remark' => $request->remark,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_vendor_details(Request $request)
    {
        VendorDetailsModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_vendor_details(Request $request)
    {
        VendorDetailsModel::where('id', $request->id)->update([
            'vendor_name' => $request->vendor_name,
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'expense_category_id' => $request->expense_category_id,
            'vendor_category_id' => $request->vendor_category_id,
            'address' => $request->address,
            'pan' => $request->pan,
            'gst_no' => $request->gst_no,
            'contact_no' => $request->contact_no,
            'contact_person' => $request->contact_person,
            'unit_of_supply' => $request->unit_of_supply,
            'vendor_code' => $request->vendor_code,
            'remark' => $request->remark,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_vendor_details(Request $request)
    {
        $data = DB::table('vendor_details')
            ->where('vendor_details.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_vendor_details_record()
    {
        $data = DB::table('vendor_details')
            ->join('companies', 'companies.id', '=', 'vendor_details.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'vendor_details.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'vendor_details.department_id')
            ->join('expenses_category', 'expenses_category.id', '=', 'vendor_details.expense_category_id')
            ->join('vendor_category', 'vendor_category.id', '=', 'vendor_details.vendor_category_id')
            ->select('vendor_details.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'expenses_category.category', 'vendor_category.vendor_category_name')
            ->orderby('vendor_details.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'vendor_name', 'company_name', 'location_name', 'department', 'category', 'vendor_category_name', 'address',
                'pan', 'gst_no', 'contact_no', 'contact_person', 'unit_of_supply', 'vendor_code','remark', 'action'
            ])
            ->addColumn('vendor_name', function ($data) {
                return $data->vendor_name;
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
            ->addColumn('category', function ($data) {
                return $data->category;
            })
            ->addColumn('vendor_category_name', function ($data) {
                return $data->vendor_category_name;
            })
            ->addColumn('address', function ($data) {
                return $data->address ?? 'N/A';
            })
            ->addColumn('pan', function ($data) {
                return $data->pan;
            })
            ->addColumn('gst_no', function ($data) {
                return $data->gst_no ?? 'N/A';
            })
            ->addColumn('contact_no', function ($data) {
                return $data->contact_no;
            })
            ->addColumn('contact_person', function ($data) {
                return $data->contact_person ?? 'N/A';
            })
            ->addColumn('unit_of_supply', function ($data) {
                return $data->unit_of_supply ?? 'N/A';
            })
            ->addColumn('vendor_code', function ($data) {
                return $data->vendor_code;
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
