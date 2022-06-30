<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\SalaryDetailModel;
use DB;
use Yajra\DataTables\DataTables;

class SalaryDetail extends Controller
{
    public function salary_details()
    {
        return view('masters.employee_masters.salary_details');
    }
    public function store_salary_details(Request $request)
    {
        SalaryDetailModel::create([
            'basic_salary'=>$request->basic_salary,
            'allowance1'=>$request->allowance1,
            'allowance2'=>$request->allowance2,
            'allowance3'=>$request->allowance3,
            'allowance4'=>$request->allowance4,
            'areas'=>$request->areas,
            'incentive'=>$request->incentive,
            'gross_salary'=>$request->gross_salary,
            'pf'=>$request->pf,
            'esic'=>$request->esic,
            'pt'=>$request->pt,
            'it'=>$request->it,
            'advance'=>$request->advance,
            'total_deduction'=>$request->total_deduction,
            'net_salary'=>$request->net_salary,
            'ctc'=>$request->ctc,
            'bank_name'=>$request->bank_name,
            'branch_name'=>$request->branch_name,
            'ifsc_code'=>$request->ifsc_code,
            'account_no'=>$request->account_no,

        ]);

        return back()->with('success', 'Record added successfully.');
    }
    public function edit_salary_details(Request $request)
    {
        $official_detail=SalaryDetailModel::where('id', $request->id)->first();
        return response()->json($official_detail);
    }
    public function update_salary_details(Request $request)
    {
        SalaryDetailModel::where('id', $request->id)->update([
            'basic_salary'=>$request->basic_salary,
            'allowance1'=>$request->allowance1,
            'allowance2'=>$request->allowance2,
            'allowance3'=>$request->allowance3,
            'allowance4'=>$request->allowance4,
            'areas'=>$request->areas,
            'incentive'=>$request->incentive,
            'gross_salary'=>$request->gross_salary,
            'pf'=>$request->pf,
            'esic'=>$request->esic,
            'pt'=>$request->pt,
            'it'=>$request->it,
            'advance'=>$request->advance,
            'total_deduction'=>$request->total_deduction,
            'net_salary'=>$request->net_salary,
            'ctc'=>$request->ctc,
            'bank_name'=>$request->bank_name,
            'branch_name'=>$request->branch_name,
            'ifsc_code'=>$request->ifsc_code,
            'account_no'=>$request->account_no,


        ]);

        return back()->with('success', 'Record updated successfully.');
    }
    public function delete_salary_details(Request $request)
    {
        SalaryDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function get_salary_details(Request $request)
    {
        $data = DB::table('salary_detail')
                ->orderby('id', 'desc')
            ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'basic_salary', 'allowance1', 'allowance2', 'allowance3', 'allowance4', 'areas', 'incentive', 'gross_salary', 'pf', 'esic',                
                'pt', 'it', 'advance', 'total_deduction', 'net_salary', 'ctc', 'bank_name', 'branch_name', 'ifsc_code', 'account_no',
                'action'

            ])
            ->addColumn('basic_salary', function ($data) {
                return $data->basic_salary;
            })
            ->addColumn('allowance1', function ($data) {
                return $data->allowance1;
            })
            ->addColumn('allowance2', function ($data) {
                return $data->allowance2;
            })
            ->addColumn('allowance3', function ($data) {
                return $data->allowance3;
            })
            ->addColumn('allowance4', function ($data) {
                return $data->allowance4;
            })
            ->addColumn('areas', function ($data) {
                return $data->areas;
            })
            ->addColumn('incentive', function ($data) {
                return $data->incentive;
            })

            ->addColumn('gross_salary', function ($data) {
                return $data->gross_salary;
            })
            ->addColumn('pf', function ($data) {
                return $data->pf;
            })
            ->addColumn('esic', function ($data) {
                return $data->esic;
            })
            
            ->addColumn('pt', function ($data) {
                return $data->pt;
            })
            ->addColumn('it', function ($data) {
                return $data->it;
            })
            ->addColumn('advance', function ($data) {
                return $data->advance;
            })
            ->addColumn('total_deduction', function ($data) {
                return $data->total_deduction;
            })
            ->addColumn('net_salary', function ($data) {
                return $data->net_salary;
            })
            ->addColumn('ctc', function ($data) {
                return $data->ctc;
            })
            ->addColumn('bank_name', function ($data) {
                return $data->bank_name;
            })
            ->addColumn('branch_name', function ($data) {
                return $data->branch_name;
            })
            ->addColumn('ifsc_code', function ($data) {
                return $data->ifsc_code;
            })

            ->addColumn('account_no', function ($data) {
                return $data->account_no;
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

