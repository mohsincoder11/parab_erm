<?php

namespace App\Http\Controllers\admin\admin_process\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\training\TrainingFeedbackModel;
use Yajra\DataTables\DataTables;
use DB;
use App\Models\admin_process\training\TrainingCalendarModel;


class TrainingFeedback extends Controller
{
    public function training_feedback()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $training_code = TrainingCalendarModel::select('training_code','id')->orderby('id','desc')->get();
        return view('admin_process.training.training-feedback', compact('company', 'employee','training_code'));
    }

    public function store_training_feedback(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'training-feedback' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/training-feedback'), $file_name);
        } else {
            $file_name = '';
        }
        TrainingFeedbackModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'training_date' => $request->training_date,
            'training_calendar_id' => $request->training_calendar_id,
            'training_proposer_employee' => $request->training_proposer_employee,
            'training_participant_employee' =>  implode(',', $request->training_participant_employee),
            'training_cost' => $request->training_cost,
            'approve_by' => $request->approve_by,
            'approve_date' => $request->approve_date,
            'file' =>  $file_name,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_training_feedback(Request $request)
    {
        TrainingFeedbackModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_training_feedback(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'training-feedback' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/training-feedback'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        TrainingFeedbackModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'training_date' => $request->training_date,
            'training_calendar_id' => $request->training_calendar_id,
            'training_proposer_employee' => $request->training_proposer_employee,
            'training_participant_employee' =>  implode(',', $request->training_participant_employee),
            'training_cost' => $request->training_cost,
            'approve_by' => $request->approve_by,
            'file' =>  $file_name,
            'approve_date' => $request->approve_date,

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_training_feedback(Request $request)
    {
        $data = DB::table('training_feedback')
            ->where('training_feedback.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_training_feedback()
    {
        $data = DB::table('training_feedback')
            ->join('companies', 'companies.id', '=', 'training_feedback.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_feedback.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'training_feedback.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_feedback.training_proposer_employee')
            ->leftjoin('training_calendar', 'training_calendar.id', '=', 'training_feedback.training_calendar_id')
            ->select('training_feedback.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee', 'training_calendar.training_code')
            ->orderby('training_feedback.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'training_date', 'training_code', 'proposer_employee','training_participant_employee', 'training_cost','approve_by','approve_cost', 'file','action'
            ])

            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department ?? 'N/A';
            })
            ->addColumn('training_date', function ($data) {
                return  $data->training_date;
            })           
            ->addColumn('training_code', function ($data) {
                return $data->training_code;
            })           

            ->addColumn('proposer_employee', function ($data) {
                return $data->proposer_employee;
            })
            ->addColumn('training_participant_employee', function ($data) {
                $employee_name = '';
                $loop = explode(',', $data->training_participant_employee);
                foreach ($loop as $emp) {

                    $employee_name .= get_employee_name($emp) . ', ';
                }

                return $employee_name;
            })
            
            ->addColumn('training_cost', function ($data) {
                return $data->training_cost;
            })
            ->addColumn('approve_by', function ($data) {
                return $data->approve_by;
            })
            ->addColumn('approve_date', function ($data) {
                return $data->approve_date;
            })

            ->addColumn('file', function ($data) {
                return $data->file ? '<a target="_blank" href="' . asset('public/uploads/admin-process/training-feedback/' . $data->file) . '"><label class="text-primary">' . $data->file . '</label></a>' : 'N/A';
            })
            ->addColumn('training_code', function ($data) {
                return $data->training_code;
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
