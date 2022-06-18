<?php

namespace App\Http\Controllers\admin\master\hr_document;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr_documents\EmployeeComplaintModel;
use DB;
use Yajra\DataTables\DataTables;



class Complaint extends Controller
{
    public function complaint()
    {
        $company = get_company_name_and_id();
        return view('masters.hr_documents.complaint', compact('company'));
    }
    
    public function store_complaint(Request $request)
    {
        EmployeeComplaintModel::create([
            'company_id' => $request->company_id,
            'complaint_from' => $request->complaint_from,
            'complaint_of' => $request->complaint_of,
            'complaint_title' => $request->complaint_title,
            'complaint_date' => date('Y-m-d', strtotime($request->complaint_date)),
            'description' => $request->description,
        ]);
        return back()->with('success', 'Record added successfully.');
    }   

    public function delete_complaint(Request $request)
    {
        EmployeeComplaintModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_complaint(Request $request)
    {
        EmployeeComplaintModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'complaint_from' => $request->complaint_from,
            'complaint_of' => $request->complaint_of,
            'complaint_title' => $request->complaint_title,
            'complaint_date' => date('Y-m-d', strtotime($request->complaint_date)),
            'description' => $request->description,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_complaint(Request $request)
    {
        $data = DB::table('employee_complaint')
          ->where('employee_complaint.id',$request->id)
        ->first();
    return response()->json($data);
    }

    public function get_complaint_record()
    {
        $data = DB::table('employee_complaint')
            ->join('companies', 'companies.id', '=', 'employee_complaint.company_id')
            ->join('employees as e1', 'e1.id', '=', 'employee_complaint.complaint_from')
            ->join('employees as e2', 'e2.id', '=', 'employee_complaint.complaint_of')
            ->select('employee_complaint.*', 'e1.full_name as complaint_from', 'e2.full_name as complaint_of', 'companies.company_name')
            ->orderby('employee_complaint.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['complaint_from', 'complaint_of', 'company_name', 'complaint_title', 'complaint_date', 'description', 'action'])
            ->addColumn('complaint_from', function ($data) {
                return $data->complaint_from;
            })
            ->addColumn('complaint_of', function ($data) {
                return $data->complaint_of;
            })
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('complaint_title', function ($data) {
                return $data->complaint_title;
            })
            ->addColumn('complaint_date', function ($data) {
                return $data->complaint_date;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
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
