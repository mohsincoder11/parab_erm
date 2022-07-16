<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\employee_master\AssetPerkDetailModel;
use DB;
use Yajra\DataTables\DataTables;

class AssetPerkDetail extends Controller
{
    public function assetperk_details()
    {
        return view('masters.employee_masters.assetperk_details');
    }
    public function store_assetperk_details(Request $request)
    {
        AssetPerkDetailModel::create([
            'employee_id' => $request->employee_id,
            'emp_code' => $request->emp_code,
            'company_id' => $request->company_id,

            'perk_name' => $request->perk_name,
            'sr_no' => $request->sr_no,
            'issue_date' => date('Y-m-d', strtotime($request->issue_date)),
            'return_date' => date('Y-m-d', strtotime($request->return_date)),
            'value' => $request->value,
            'validity' => $request->validity,


        ]);

        return back()->with('success', 'Record added successfully.');
    }
    public function edit_assetperk_details(Request $request)
    {
        $official_detail = AssetPerkDetailModel::where('id', $request->id)->first();
        return response()->json($official_detail);
    }
    public function update_assetperk_details(Request $request)
    {
        AssetPerkDetailModel::where('id', $request->id)->update([
            'employee_id' => $request->employee_id,
            'emp_code' => $request->emp_code,
            'company_id' => $request->company_id,

            'perk_name' => $request->perk_name,
            'sr_no' => $request->sr_no,
            'issue_date' => date('Y-m-d', strtotime($request->issue_date)),
            'return_date' => date('Y-m-d', strtotime($request->return_date)),
            'value' => $request->value,
            'validity' => $request->validity,

        ]);

        return back()->with('success', 'Record updated successfully.');
    }
    public function delete_assetperk_details(Request $request)
    {
        AssetPerkDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function get_assetperk_details(Request $request)
    {
        $data = DB::table('assetperk_detail')
            ->join('personal_detail', 'personal_detail.id', '=', 'assetperk_detail.employee_id')
            ->select('assetperk_detail.*', 'personal_detail.employee_name')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'employee_name','emp_code','perk_name', 'sr_no', 'issue_date', 'return_date', 'value', 'validity', 'action'
            ])
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('emp_code', function ($data) {
                return $data->emp_code ?? 'N/A';
            })
            ->addColumn('perk_name', function ($data) {
                return $data->perk_name ?? 'N/A';
            })
            ->addColumn('sr_no', function ($data) {
                return $data->sr_no ?? 'N/A';
            })
            ->addColumn('issue_date', function ($data) {
                return $data->issue_date ?? 'N/A';
            })
            ->addColumn('return_date', function ($data) {
                return $data->return_date ?? 'N/A';
            })
            ->addColumn('value', function ($data) {
                return $data->value ?? 'N/A';
            })
            ->addColumn('validity', function ($data) {
                return $data->validity ?? 'N/A';
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
