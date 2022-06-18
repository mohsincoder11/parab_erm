<?php

namespace App\Http\Controllers\admin\general_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\AwardModel;
use Yajra\DataTables\DataTables;
use DB;


class Award extends Controller
{
    public function award()
    {
        $company = get_company_name_and_id();
        return view('general_master.award', compact('company'));
    }

    public function store_award(Request $request)
    {
        // dd($request->all());
        AwardModel::create([
            'company_id' => $request->company_id,
            'employee_id' => $request->employee_id,
            'department_id' => $request->department_id,
            'award_type' => $request->award_type,
            'gift' => $request->gift,
            'cash' => $request->cash,
            'description' => $request->description,
            'start_date' => date('Y-m-d', strtotime($request->start_date))
        ]);
        return back()->with('success', 'Record added successfully.');
    }
    public function update_award(Request $request)
    {
        // dd($request->all());
        AwardModel::where('id',$request->id)->update([
            'company_id' => $request->company_id,
            'employee_id' => $request->employee_id,
            'department_id' => $request->department_id,
            'award_type' => $request->award_type,
            'gift' => $request->gift,
            'cash' => $request->cash,
            'description' => $request->description,
            'start_date' => date('Y-m-d', strtotime($request->start_date))
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function delete_award_record(Request $request)
    {
        AwardModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function edit_award(Request $request)
    {
        $data = DB::table('awards')
        ->where('awards.id',$request->id)
        ->first();
        return response()->json($data);

    }

    public function get_award_record()
    {
        $data = DB::table('awards')
            ->join('employees', 'employees.id', '=', 'awards.employee_id')
            ->join('companies', 'companies.id', '=', 'awards.company_id')
            ->join('departments', 'departments.id', '=', 'awards.department_id')
            ->select('awards.*', 'employees.full_name', 'companies.company_name', 'departments.department')
            ->orderby('awards.id', 'desc')
            ->get();
          //  dd($data);

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['company_name', 'department', 'full_name', 'award_type', 'gift', 'cash', 'description', 'start_date', 'action'])
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
            ->addColumn('full_name', function ($data) {
                return $data->full_name;
            })
            ->addColumn('award_type', function ($data) {
                return $data->award_type;
            })
            ->addColumn('gift', function ($data) {
                return $data->gift;
            })
            ->addColumn('cash', function ($data) {
                return $data->cash;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
            })
            ->addColumn('start_date', function ($data) {
                return $data->start_date;
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
