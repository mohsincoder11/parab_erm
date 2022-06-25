<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\statutory_master\GratuityModel;
use DB;
use Yajra\DataTables\DataTables;

class Gratuity extends Controller
{
    public function gratuity(){
        return view('masters.statutory_masters.gratuity');
    }

    public function store_gratuity(Request $request)
    {
        if ($request->hasFile('gratuity_file') && $request->hasFile('chalan')) {
            $image1 = $request->file('gratuity_file');
            $file1 = 'p'.rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads/gratuity_file'), $file1);
          
            $image2 = $request->file('chalan');
            $file2 = 'c'.rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('uploads/gratuity_file'), $file2);

        GratuityModel::create([
            'gratuity_file' => $file1,
            'chartA' => $request->chartA,
            'chalan' => $file2,
        ]);    
            return back()->with('success', 'Record added successfully.');

    }else
    return back()->with('error', 'Please fill all details.');

    }

    public function delete_gratuity(Request $request)
    {
        GratuityModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_gratuity(Request $request)
    {
        if ($request->hasFile('gratuity_file')) {
            $image1 = $request->file('gratuity_file');
            $file1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads/gratuity_file'), $file1);
        } else {
            $file1 = $request->old_file1;
        }
        if ($request->hasFile('chalan')) {
            $image2 = $request->file('chalan');
            $file2 = rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('uploads/gratuity_file'), $file2);
        } else {
            $file2 = $request->old_file2;
        }
        GratuityModel::where('id', $request->id)->update([
            'gratuity_file' => $file1,
            'chartA' => $request->chartA,
            'chalan' => $file2,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_gratuity(Request $request)
    {
        $data =GratuityModel::where('id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_gratuity()
    {
        $data = GratuityModel::orderby('id','desc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['gratuity_file','chartA', 'chalan','action'])
            ->addColumn('gratuity_file', function ($data) {
                    return '<a target="_blank" href="' . asset('public/uploads/gratuity_file/' . $data->gratuity_file) . '"><label class="text-primary">' . $data->gratuity_file . '</label></a>';
            })
            ->addColumn('chartA', function ($data) {
                return $data->chartA;
            })
            ->addColumn('chalan', function ($data) {
                return '<a target="_blank" href="' . asset('public/uploads/gratuity_file/' . $data->chalan) . '"><label class="text-primary">' . $data->chalan . '</label></a>';
                                  
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


