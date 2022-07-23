<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\QualificationDetailModel;
use DB;
use Yajra\DataTables\DataTables;

class QualificationDetail extends Controller
{
    public function qualification_details()
    {
        return view('masters.employee_masters.qualification_details');
    }

    public function store_qualification_details(Request $request)
    {
        QualificationDetailModel::create([
            'employee_id'=>$request->employee_id,
            'emp_code' => $request->emp_code,
           
            'basic_qualification' => $request->basic_qualification,

            'graduation' => $request->graduation,
            'graduation_year' => $request->graduation_year,
            'post_graduation' => $request->post_graduation,
            'post_graduation_year' => $request->post_graduation_year,
            'professional_qualification' => $request->professional_qualification,
            'university' => $request->university,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function edit_qualification_details(Request $request)
    {
        $qualification_detail = QualificationDetailModel::where('id', $request->id)->first();
        return response()->json($qualification_detail);
    }

    public function update_qualification_details(Request $request)
    {
        QualificationDetailModel::where('id', $request->id)->update([
            'employee_id'=>$request->employee_id,
            'emp_code' => $request->emp_code,
            'basic_qualification' => $request->basic_qualification,
           
        
            'graduation' => $request->graduation,
            'graduation_year' => $request->graduation_year,
            'post_graduation' => $request->post_graduation,
            'post_graduation_year' => $request->post_graduation_year,
            'professional_qualification' => $request->professional_qualification,
            'university' => $request->university,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function delete_qualification_details(Request $request)
    {
        QualificationDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function get_qualification_details(Request $request)
    {
        $data = DB::table('qualification_detail')
        ->join('personal_detail', 'personal_detail.id', '=', 'qualification_detail.employee_id')
        ->select('qualification_detail.*','personal_detail.employee_name')

            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'employee_name','emp_code', 'graduation', 'graduation_year', 'post_graduation', 'post_graduation_year', 'professional_qualification', 'university', 'action'
            ])
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('emp_code', function ($data) {
                return $data->emp_code ?? 'N/A';
            })
            ->addColumn('basic_qualification', function ($data) {
                return $data->basic_qualification ?? 'N/A';
            })
            
            ->addColumn('graduation', function ($data) {
                return $data->graduation ?? 'N/A';
            })
            ->addColumn('graduation_year', function ($data) {
                return $data->graduation_year ?? 'N/A';
            })
            ->addColumn('post_graduation', function ($data) {
                return $data->post_graduation ?? 'N/A';
            })
            ->addColumn('post_graduation_year', function ($data) {
                return $data->post_graduation_year ?? 'N/A';
            })
            ->addColumn('professional_qualification', function ($data) {
                return $data->professional_qualification ?? 'N/A';
            })
            ->addColumn('university', function ($data) {
                return $data->university ?? 'N/A';
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
