<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\asset_master\CompanyAssetModel;
use DB;
use Yajra\DataTables\DataTables;


class CompanyAssets extends Controller
{
    public function company_assets()
    {
        return view('masters.assets_master.company_assets');
    }

    public function store_company_assets(Request $request)
    {
        CompanyAssetModel::create([
            'asset_name' => $request->asset_name,
            'asset_category_id' => $request->asset_category_id,
            'company_id' => $request->company_id,
            'asset_serial_no' => $request->asset_serial_no,

        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_company_assets(Request $request)
    {
        CompanyAssetModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function edit_company_assets(Request $request)
    {
        $data = DB::table('company_asset')
            ->where('company_asset.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function update_company_assets(Request $request)
    {        
        CompanyAssetModel::where('id', $request->id)->update([
            'asset_name' => $request->asset_name,
            'asset_category_id' => $request->asset_category_id,
            'company_id' => $request->company_id,
            'asset_serial_no' => $request->asset_serial_no,
        ]);

        return back()->with('success', 'Record updated successfully.');
    }

    public function get_company_assets()
    {
        $data = DB::table('company_asset')
            ->join('asset_category', 'asset_category.id', '=', 'company_asset.asset_category_id')
            ->join('companies', 'companies.id', '=', 'company_asset.company_id')
            ->select('company_asset.*', 'asset_category.category_name', 'companies.company_name')
            ->orderby('company_asset.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['asset_name', 'category_name', 'company_name', 'asset_serial_no', 'action'])

            ->addColumn('asset_name', function ($data) {
                return $data->asset_name;
            })
            ->addColumn('category_name', function ($data) {
                return $data->category_name;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('asset_serial_no', function ($data) {
                return $data->asset_serial_no;
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
