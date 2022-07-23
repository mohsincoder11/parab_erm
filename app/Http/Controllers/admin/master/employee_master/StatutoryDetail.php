<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\StatutoryDetailModel;
use DB;
use Yajra\DataTables\DataTables;


class StatutoryDetail extends Controller
{
    public function statutory_details()
    {
        return view('masters.employee_masters.statutory_details');
    }

    public function store_statutory_details(Request $request)
    {
        StatutoryDetailModel::create([
            'employee_id'=>$request->employee_id,
            'emp_code' => $request->emp_code,
           
              'uan_no' => $request->uan_no,
            'esic_no' => $request->esic_no,
            
            'is_pt' => $request->is_pt,
           
        ]);

        return back()->with('success', 'Record added successfully.');
    }

    public function edit_statutory_details(Request $request)
    {
        $statutory_detail=StatutoryDetailModel::where('id', $request->id)->first();
        return response()->json($statutory_detail);
    }

    public function update_statutory_details(Request $request)
    {
        StatutoryDetailModel::where('id', $request->id)->update([
            'employee_id'=>$request->employee_id,
            'emp_code' => $request->emp_code,
           
            'uan_no' => $request->uan_no,
            'esic_no' => $request->esic_no,
            
            'is_pt' => $request->is_pt,

        ]);

        return back()->with('success', 'Record updated successfully.');
    }

    public function delete_statutory_details(Request $request)
    {
        StatutoryDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function get_statutory_details(Request $request)
    {
        $data = DB::table('statutory_detail')
        ->join('personal_detail', 'personal_detail.id', '=', 'statutory_detail.employee_id')
        ->select('statutory_detail.*','personal_detail.employee_name')

               ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'employee_name','emp_code','uan_no', 'esic_no',  'is_pt','action'
            ])
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('emp_code', function ($data) {
                return $data->emp_code ?? 'N/A';
            })
            ->addColumn('uan_no', function ($data) {
                return $data->uan_no ?? 'N/A';
            })
            ->addColumn('esic_no', function ($data) {
                return $data->esic_no ?? 'N/A';
            })
          
            ->addColumn('is_pt', function ($data) {
                return $data->is_pt;
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
