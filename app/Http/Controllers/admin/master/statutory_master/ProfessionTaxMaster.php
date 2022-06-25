<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\statutory_master\ProfessionTaxModel;
use DB;
use Yajra\DataTables\DataTables;

class ProfessionTaxMaster extends Controller
{
    public function profession_tax(){
        return view('masters.statutory_masters.profession_tax');
    }
    public function store_profession_tax(Request $request)
    {
        if ($request->hasFile('profession_tax_file')) {
            $image1 = $request->file('profession_tax_file');
            $file1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads/profession_tax_file'), $file1);
          
           
        ProfessionTaxModel::create([
            'profession_tax_file' => $file1,
            'chartA' => $request->chartA,
        ]);    
            return back()->with('success', 'Record added successfully.');

    }else
    return back()->with('error', 'Please fill all details.');

    }

    public function delete_profession_tax(Request $request)
    {
        ProfessionTaxModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_profession_tax(Request $request)
    {
        if ($request->hasFile('profession_tax_file')) {
            $image1 = $request->file('profession_tax_file');
            $file1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads/profession_tax_file'), $file1);
        } else {
            $file1 = $request->old_file1;
        }
       
        ProfessionTaxModel::where('id', $request->id)->update([
            'profession_tax_file' => $file1,
            'chartA' => $request->chartA,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_profession_tax(Request $request)
    {
        $data =ProfessionTaxModel::where('id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_profession_tax()
    {
        $data = ProfessionTaxModel::orderby('id','desc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['profession_tax_file','chartA', 'action'])
            ->addColumn('profession_tax_file', function ($data) {
                    return '<a target="_blank" href="' . asset('public/uploads/profession_tax_file/' . $data->profession_tax_file) . '"><label class="text-primary">' . $data->profession_tax_file . '</label></a>';
            })
            ->addColumn('chartA', function ($data) {
                return $data->chartA;
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




