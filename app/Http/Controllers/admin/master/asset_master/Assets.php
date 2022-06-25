<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\asset_master\AssetModel;
use DB;
use Yajra\DataTables\DataTables;

class Assets extends Controller
{
    public function assets()
    {
        $employee = DB::table('employees')->orderby('full_name', 'asc')->get();
        return view('masters.assets_master.assets', compact('employee'));
    }

    public function store_assets(Request $request)
    {
        if ($request->hasFile('asset_image')) {
            $image = $request->file('asset_image');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/asset_image'), $file_name);
            AssetModel::create([
                'asset_name' => $request->asset_name,
                'company_asset_code' => $request->company_asset_code,
                'asset_category_id' => $request->asset_category_id,
                'is_working' => $request->is_working,
                'department_id' => $request->department_id,
                'employee_id' => $request->employee_id,
                'purchase_date' => $request->purchase_date,
                'warranty_date' => $request->warranty_date,
                'manufacturer' => $request->manufacturer,
                'invoice_no' => $request->invoice_no,
                'serial_no' => $request->serial_no,
                'asset_image' => $file_name

            ]);
            return back()->with('success', 'Record added successfully.');
        } else
            return back()->with('error', 'Please fill all details.');
    }

    public function delete_assets(Request $request)
    {
        AssetModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function edit_assets(Request $request)
    {
        $data = DB::table('assets')
            ->where('assets.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function update_assets(Request $request)
    {
        if ($request->hasFile('asset_image')) {
            $image = $request->file('asset_image');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/asset_image'), $file_name);
        } else {
            $file_name = $request->old_file;
        }

        AssetModel::where('id', $request->id)->update([
            'asset_name' => $request->asset_name,
            'company_asset_code' => $request->company_asset_code,
            'asset_category_id' => $request->asset_category_id,
            'is_working' => $request->is_working,
            'department_id' => $request->department_id,
            'employee_id' => $request->employee_id,
            'purchase_date' =>  date('Y-m-d', strtotime($request->purchase_date)),
            'warranty_date' =>  date('Y-m-d', strtotime($request->warranty_date)),
            'manufacturer' => $request->manufacturer,
            'invoice_no' => $request->invoice_no,
            'serial_no' => $request->serial_no,
            'asset_image' => $file_name
        ]);

        return back()->with('success', 'Record updated successfully.');
    }

    public function get_assets()
    {
        $data = DB::table('assets')
            ->join('asset_category', 'asset_category.id', '=', 'assets.asset_category_id')
            ->join('employees', 'employees.id', '=', 'assets.employee_id')
            ->join('departments', 'departments.id', '=', 'assets.department_id')
            ->select('assets.*', 'departments.department', 'asset_category.category_name', 'employees.full_name')
            ->orderby('assets.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['asset_name', 'company_asset_code', 'category_name', 'is_working', 'department', 'employee_id', 'purchase_date', 'warranty_date', 'manufacturer', 'invoice_no', 'serial_no', 'asset_image', 'action'])

            ->addColumn('asset_name', function ($data) {
                return $data->asset_name;
            })
            ->addColumn('category_name', function ($data) {
                return $data->category_name;
            })
            ->addColumn('company_asset_code', function ($data) {
                return $data->company_asset_code;
            })
           
            ->addColumn('is_working', function ($data) {
                return $data->is_working;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
            ->addColumn('full_name', function ($data) {
                return $data->full_name;
            })
            ->addColumn('asset_image', function ($data) {
                return '<a target="_blank" href="' . asset('public/uploads/asset_image/' . $data->asset_image) . '"><label class="text-primary">' . $data->asset_image . '</label></a>';
            })
            ->addColumn('invoice_no', function ($data) {
                return $data->invoice_no;
            })
            ->addColumn('serial_no', function ($data) {
                return $data->serial_no;
            })
            ->addColumn('purchase_date', function ($data) {
                return $data->purchase_date;
            })
            ->addColumn('warranty_date', function ($data) {
                return $data->warranty_date;
            })
            ->addColumn('manufacturer', function ($data) {
                return $data->manufacturer;
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
