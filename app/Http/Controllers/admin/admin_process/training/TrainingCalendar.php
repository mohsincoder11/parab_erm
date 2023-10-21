<?php

namespace App\Http\Controllers\admin\admin_process\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\training\TrainingCalendarModel;
use App\Models\admin_process\training\TrainingCalendarItemsDetailsModel;

use Yajra\DataTables\DataTables;
use DB;

class TrainingCalendar extends Controller
{
    public function training_calendar()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $vendor = get_vendor_name_and_id();
        return view('admin_process.training.training-calendar', compact('company', 'employee', 'vendor'));
    }

    public function store_training_calendar(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'training-calendar' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/training-calendar'), $file_name);
        } else {
            $file_name = '';
        }
        $TrainingCalendarModel= TrainingCalendarModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'training_start_date' => $request->training_start_date,
            'training_start_time' => $request->training_start_time,
            'training_end_date' => $request->training_end_date,
            'training_end_time' => $request->training_end_time,
            'trainer_id' => $request->trainer_id,
            'training_proposer_employee' => $request->training_proposer_employee,
            'training_participant_employee' =>  implode(',', $request->training_participant_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_training_cost' => $request->estimate_training_cost,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'training_code' => $request->training_code,
        ]);
        foreach($request->perticular as $key => $perticular)
        {
            TrainingCalendarItemsDetailsModel::create([          
                'training_calendar_id' => $TrainingCalendarModel->id,
                'perticular' => $perticular,
                'price' => $request->price[$key]            
            ]);
        }
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_training_calendar(Request $request)
    {
        TrainingCalendarModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_training_calendar(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'training-calendar' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/training-calendar'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        TrainingCalendarModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'training_start_date' => $request->training_start_date,
            'training_start_time' => $request->training_start_time,
            'training_end_date' => $request->training_end_date,
            'training_end_time' => $request->training_end_time,
            'trainer_id' => $request->trainer_id,
            'training_proposer_employee' => $request->training_proposer_employee,
            'training_participant_employee' =>  implode(',', $request->training_participant_employee),
            'vendor_id' => implode(',', $request->vendor_id),
            'estimate_training_cost' => $request->estimate_training_cost,
            'file_type' => $request->file_type,
            'file' =>  $file_name,
            'training_code' => $request->training_code,

        ]);

        foreach($request->perticular as $key => $perticular)
        {
           TrainingCalendarItemsDetailsModel::create([          
            'training_calendar_id' => $request->id,
            'perticular' => $perticular,
            'price' => $request->price[$key]          
            ]);
        }


        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_training_calendar(Request $request)
    {
        $data['first'] = DB::table('training_calendar')
            ->where('training_calendar.id', $request->id)
            ->first();
        $data['second']=DB::table('training_calender_items_detail')
            ->where('training_calendar_id', $data['first']->id)
            ->get();    
        return response()->json($data);
    }

    public function get_training_calendar()
    {
        $data = DB::table('training_calendar')
            ->join('companies', 'companies.id', '=', 'training_calendar.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_calendar.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'training_calendar.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_calendar.training_proposer_employee')
            ->leftjoin('vendor_details', 'vendor_details.id', '=', 'training_calendar.trainer_id')
            ->select('training_calendar.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee', 'vendor_details.vendor_name as trainer_name')
            ->orderby('training_calendar.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'department', 'training_start_time', 'training_end_time',  'trainer_name', 'proposer_employee','training_participant_employee', 'vendor_id', 'estimate_training_cost', 'file',  'training_code', 'action'
            ])

            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })
            ->addColumn('department', function ($data) {
                return $data->department;
            })
            ->addColumn('training_start_time', function ($data) {
                return $data->training_start_date . ' ' . $data->training_start_time;
            })
            ->addColumn('training_end_time', function ($data) {
                return $data->training_end_date . ' ' . $data->training_end_time;
            })
            ->addColumn('trainer_name', function ($data) {
                return $data->trainer_name;
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
            ->addColumn('vendor_id', function ($data) {
                $vendor_name = '';
                $loop = explode(',', $data->vendor_id);
                foreach ($loop as $emp) {

                    $vendor_name .= get_vendor_name($emp) . ', ';
                }

                return $vendor_name;
            })

            ->addColumn('estimate_training_cost', function ($data) {
                return $data->estimate_training_cost;
            })

            ->addColumn('file', function ($data) {
                return $data->file ? '<a target="_blank" href="' . asset('public/uploads/admin-process/training-calendar/' . $data->file) . '"><label class="text-primary">' . $data->file . '</label></a>' : 'N/A';
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
