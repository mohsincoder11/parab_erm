<?php

namespace App\Http\Controllers\admin\admin_process\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\inward_outward\OutwardModel;
use App\Models\admin_process\inward_outward\InwardModel;
use Yajra\DataTables\DataTables;
use DB;
class Outward extends Controller
{
    public function outward(){
        $company = get_company_name_and_id();
        $inward_number=InwardModel::select('inward_number','id')->orderby('id','desc')->get();

        return view('admin_process.inward_outward.outward',compact('company','inward_number'));
    }

    public function store_outward(Request $request)
    {
        OutwardModel::create([          
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'outward_type' => $request->outward_type,
            'inward_number' => $request->inward_number,
            'outward_date' => $request->outward_date,
            'to_name' => $request->to_name,
            'employee_id' => $request->employee_id,
            'outward_number' => $request->outward_number,
            'courier_name' => $request->courier_name,
            'awb_number' => $request->awb_number,
       
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_outward(Request $request)
    {
        OutwardModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_outward(Request $request)
    {
        OutwardModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'outward_type' => $request->outward_type,
            'inward_number' => $request->inward_number,
            'outward_date' => $request->outward_date,
            'to_name' => $request->to_name,
            'employee_id' => $request->employee_id,
            'outward_number' => $request->outward_number,
            'courier_name' => $request->courier_name,
            'awb_number' => $request->awb_number,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_outward(Request $request)
    {
        $data = DB::table('outwards')
            ->where('outwards.id', $request->id)
            ->join('personal_detail','personal_detail.id','=','outwards.employee_id')
            ->select('outwards.*','personal_detail.employee_name')
            ->first();
        return response()->json($data);
    }

    public function get_outward()
    {
        $data = DB::table('outwards')
            ->join('companies', 'companies.id', '=', 'outwards.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'outwards.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'outwards.department_id')
            ->leftjoin('personal_detail', 'personal_detail.id', '=', 'outwards.employee_id')
             ->select('outwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
            ->orderby('outwards.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'outward_type','outward_date','inward_number','to_name',
                'courier_name','awb_number','employee_name','outward_number','action'
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
            ->addColumn('outward_type', function ($data) {
                return $data->outward_type;
            })
           
            ->addColumn('outward_date', function ($data) {
                return $data->outward_date;
            })
            ->addColumn('inward_number', function ($data) {
                return $data->inward_number;
            })
            ->addColumn('to_name', function ($data) {
                return $data->to_name;
            })
            ->addColumn('courier_name', function ($data) {
                return $data->courier_name;
            })
            ->addColumn('awb_number', function ($data) {
                return $data->awb_number;
            })
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('outward_number', function ($data) {
                return $data->outward_number;
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

