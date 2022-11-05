<?php

namespace App\Http\Controllers\admin\master\bank_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bank_master\SalaryBankModel;
use DB;
use Yajra\DataTables\DataTables;

class SalaryBank extends Controller
{
    public function salary_bank()
    {
        return view('masters.bank_masters.salary_bank');
    }
    public function store_salary_bank(Request $request)
    {
       // dd($request->all());
        if ($request->hasFile('salary_format')) {
            $image = $request->file('salary_format');
            $file_name ='B'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/salary_format'), $file_name);

            SalaryBankModel::create([
                'bank_id' => $request->bank_id,
                'bank_acc_no' => $request->bank_acc_no,
                'bank_ifsc_code' => $request->bank_ifsc_code,
                'company_id' => $request->company_id,
                'salary_format' => $file_name,

            ]);

            return back()->with('success', 'Record added successfully.');
        } else
            return back()->with('error', 'Please fill all details.');
    }

    public function delete_salary_bank(Request $request)
    {
        SalaryBankModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_salary_bank(Request $request)
    {
        if ($request->hasFile('salary_format')) {
            $image = $request->file('salary_format');
            $file_name ='B'.time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/appointment_letter'), $file_name);
        } else {
            $file_name = $request->old_file;
        }
        SalaryBankModel::where('id', $request->id)->update([
            'bank_id' => $request->bank_id,
            'bank_acc_no' => $request->bank_acc_no,
            'bank_ifsc_code' => $request->bank_ifsc_code,
            'company_id' => $request->company_id,
            'salary_format' => $file_name,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_salary_bank(Request $request)
    {
        $data = SalaryBankModel::where('id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_salary_bank()
    {
        $data = DB::table('salary_bank')
            ->join('companies', 'companies.id', '=', 'salary_bank.company_id')
            ->join('banks', 'banks.id', '=', 'salary_bank.bank_id')
            ->select('salary_bank.*', 'companies.company_name', 'banks.bank_name')
            ->orderby('salary_bank.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['bank_name','salary_format', 'bank_acc_no', 'bank_ifsc_code', 'company_name', 'action'])
            ->addColumn('bank_name', function ($data) {
                return $data->bank_name;
            })
            ->addColumn('bank_acc_no', function ($data) {
                return $data->bank_acc_no;
            })
            ->addColumn('bank_ifsc_code', function ($data) {
                return $data->bank_ifsc_code;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            }) 
            ->addColumn('salary_format', function ($data) {
                return '<a target="_blank" href="'.asset('public/uploads/salary_format/'.$data->salary_format).'"><label class="text-primary">'.$data->salary_format.'</label></a>';        
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
    }
}
