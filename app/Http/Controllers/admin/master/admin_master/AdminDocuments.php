<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\AdminDocumentsModel;
use DB;
use Yajra\DataTables\DataTables;
use App\Department;
use App\Location;

class AdminDocuments extends Controller
{
    public function admin_documents()
    {
        $company = get_company_name_and_id();

        return view('masters.admin_master.admin-documents', compact('company'));
    }

    public function store_admin_documents(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin_document'), $file_name);
      
        AdminDocumentsModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'project_id' => $request->project_id,
            'document_type' => $request->document_type,
            'file'=>$file_name
   ]);
        return back()->with('success', 'Record added successfully.');
    } else
    return back()->with('error', 'Please fill all details.');

    }

    public function delete_admin_documents(Request $request)
    {
        AdminDocumentsModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_admin_documents(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin_document'), $file_name);
        } else {
            $file_name = $request->old_file;
        }
        AdminDocumentsModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'project_id' => $request->project_id,
            'document_type' => $request->document_type,
            'file'=>$file_name  

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_admin_documents(Request $request)
    {
        $data = DB::table('admin_documents')
            ->where('admin_documents.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_admin_documents_record()
    {
        $data = DB::table('admin_documents')
            ->join('companies', 'companies.id', '=', 'admin_documents.company_id')
            ->join('locations', 'locations.id', '=', 'admin_documents.location_id')
            ->join('departments', 'departments.id', '=', 'admin_documents.department_id')
            ->join('projects', 'projects.id', '=', 'admin_documents.project_id')
            ->select('admin_documents.*','locations.location_name', 'departments.department', 'companies.company_name','projects.project')
            ->orderby('admin_documents.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['file','company_name', 'location_name', 'department','project','document_type', 'action'])
            ->addColumn('file', function ($data) {
                return '<a target="_blank" href="' . asset('public/uploads/admin_document/' . $data->file) . '"><label class="text-primary">' . $data->file . '</label></a>';
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
         
            ->addColumn('project', function ($data) {
                return $data->project;
            })
            ->addColumn('document_type', function ($data) {
                return $data->document_type;
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
