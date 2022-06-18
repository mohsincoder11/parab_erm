<?php

namespace App\Http\Controllers\admin\master\hr_document;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr_documents\ConfirmationLetterModel;
use DB;
use Yajra\DataTables\DataTables;


class ConfirmationLetter extends Controller
{
    public function confirmation_letter(){
        $company = get_company_name_and_id();
        $projects = get_project_name_and_id();
        return view('masters.hr_documents.confirmation_letter',compact('company', 'projects'));
    }
    
   
    public function store_confirmation_letter(Request $request)
    {
        if ($request->hasFile('upload_file')) {
            $image = $request->file('upload_file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/confirmation_letter'), $file_name);
            ConfirmationLetterModel::create([
                'company_id' => $request->company_id,
                'location_id' => $request->location_id,
                'project_id' => $request->project_id,
                'document' => $request->document,
                'employee_status' => $request->employee_status,
                'file' => $file_name,
            ]);
            return back()->with('success', 'Record added successfully.');
        } else
            return back()->with('error', 'Please fill all details.');
    }
    public function delete_confirmation_letter(Request $request)
    {
        ConfirmationLetterModel::where('id',$request->id)->delete();
        return response()->json(1);
    }

    public function edit_confirmation_letter(Request $request)
    {
        $data = DB::table('confirmation_letter')
             ->where('confirmation_letter.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function update_confirmation_letter(Request $request)
    {
        if ($request->hasFile('upload_file')) {
            $image = $request->file('upload_file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/confirmation_letter'), $file_name);
        } else {
            $file_name = $request->old_file;
        }
        ConfirmationLetterModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'project_id' => $request->project_id,
            'document' => $request->document,
            'employee_status' => $request->employee_status,
            'file' => $file_name,
        ]);

        return back()->with('success', 'Record updated successfully.');
    }

    public function get_confirmation_letter_record(){
        $data=DB::table('confirmation_letter')
        ->join('companies','companies.id','=','confirmation_letter.company_id')
        ->join('locations','locations.id','=','confirmation_letter.location_id')
        ->join('projects','projects.id','=','confirmation_letter.project_id')
        ->select('confirmation_letter.*','companies.company_name','locations.location_name','projects.project')
        ->orderby('confirmation_letter.id','desc')
        ->get();
       
       
        return DataTables::of($data)
         ->addIndexColumn()
        ->rawColumns(['file', 'location_name', 'company_name', 'project', 'document', 'employee_status','action'])    
         ->addColumn('employee_status', function ($data) {
            return $data->employee_status;        
        })   
        ->addColumn('company_name', function ($data) {
            return $data->company_name;        
        })
       
        ->addColumn('file', function ($data) {
            return '<a target="_blank" href="'.asset('public/uploads/confirmation_letter/'.$data->file).'"><label class="text-primary">'.$data->file.'</label></a>';        
        })
        ->addColumn('document', function ($data) {
            return $data->document;        
        })
        ->addColumn('location_name', function ($data) {
            return $data->location_name;        
        })
        ->addColumn('project', function ($data) {
            return $data->project;        
        })
       
        ->addColumn('action', function ($data) {
            return '<a class="edit" id="'.$data->id.'" data-toggle="modal" data-placement="top"
            title="Edit" data-toggle="modal" data-target=".add-edit_modal"><svg
            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-edit-2 text-success">
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
        </svg></a>

    <a class="delete" id="'.$data->id.'" data-toggle="tooltip" data-placement="top"
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



