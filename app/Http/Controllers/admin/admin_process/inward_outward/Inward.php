<?php

namespace App\Http\Controllers\admin\admin_process\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\inward_outward\InwardModel;
use Yajra\DataTables\DataTables;
use DB;

class Inward extends Controller
{
    public function inward(){
        $company = get_company_name_and_id();

        return view('admin_process.inward_outward.inward',compact('company'));
    }

    public function store_inward(Request $request)
    {
        InwardModel::create([          
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'inward_type' => $request->inward_type,
            'from_name' => $request->from_name,
            'received_date' => $request->received_date,
            'to_name' => $request->to_name,
            'employee_id' => $request->employee_id,
            'inward_number' => $request->inward_number,
           
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_inward(Request $request)
    {
        InwardModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_inward(Request $request)
    {
        InwardModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'inward_type' => $request->inward_type,
            'from_name' => $request->from_name,
            'received_date' => $request->received_date,
            'to_name' => $request->to_name,
            'employee_id' => $request->employee_id,
            'inward_number' => $request->inward_number,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_inward(Request $request)
    {
        $data = DB::table('inwards')
            ->where('inwards.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_inward()
    {
        $data = DB::table('inwards')
            ->join('companies', 'companies.id', '=', 'inwards.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'inwards.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'inwards.department_id')
            ->leftjoin('personal_detail', 'personal_detail.id', '=', 'inwards.employee_id')
             ->select('inwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
            ->orderby('inwards.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'inward_type','received_date','to_name','employee_name','inward_number','action'
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
            ->addColumn('inward_type', function ($data) {
                return $data->inward_type;
            })
           
            ->addColumn('received_date', function ($data) {
                return $data->received_date;
            })
            ->addColumn('to_name', function ($data) {
                return $data->to_name;
            })
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('inward_number', function ($data) {
                return $data->inward_number;
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

