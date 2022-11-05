<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\TraineeProgramModel;
use App\Models\admin_master\VendorDetailsModel;
use DB;
use Yajra\DataTables\DataTables;


class TraineeProgram extends Controller
{
    //
    public function trainee_program()
    {
        $company = get_company_name_and_id();
        $vendor_details =VendorDetailsModel::select('id', 'vendor_name')->orderBy('id', 'desc')->get();
        return view('masters.admin_master.trainee_program', compact('company', 'vendor_details'));
    }

    public function store_trainee_program(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/training_document'), $file_name);

        TraineeProgramModel::create([
            'training_name' => $request->training_name,
            'company_id' => $request->company_id,
            'department_id' => $request->department_id,
            'training_category' => $request->training_category,
            'vendor_id' => $request->vendor_id,
            'training_duration_hrs' => $request->training_duration_hrs,
            'training_duration_days' => $request->training_duration_days,
            'training_topic' => $request->training_topic,
            'training_document' => $file_name

        ]);
        return back()->with('success', 'Record added successfully.');
    } else
    return back()->with('error', 'Please fill all details.');
    }

    public function delete_trainee_program(Request $request)
    {
        TraineeProgramModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_trainee_program(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/training_document'), $file_name);
        } else {
            $file_name = $request->old_file;
        }
        TraineeProgramModel::where('id', $request->id)->update([
            'training_name' => $request->training_name,
            'company_id' => $request->company_id,
            'department_id' => $request->department_id,
            'training_category' => $request->training_category,
            'vendor_id' => $request->vendor_id,
            'training_duration_hrs' => $request->training_duration_hrs,
            'training_duration_days' => $request->training_duration_days,
            'training_topic' => $request->training_topic,
            'training_document' => $file_name

        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_trainee_program(Request $request)
    {
        $data = DB::table('trainee_program')
            ->where('trainee_program.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_trainee_program_record()
    {
        $data = DB::table('trainee_program')
            ->join('companies', 'companies.id', '=', 'trainee_program.company_id')
            ->join('vendor_details', 'vendor_details.id', '=', 'trainee_program.vendor_id')
            ->leftjoin('departments', 'departments.id', '=', 'trainee_program.department_id')
            ->select('trainee_program.*','companies.company_name', 'departments.department','vendor_details.vendor_name')
            ->orderby('trainee_program.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['training_name', 'company_name','department', 'training_category', 'vendor_name','training_duration','training_topic','training_document', 'action'])
           
            ->addColumn('training_name', function ($data) {
                return $data->training_name;
            })            
            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })           
            ->addColumn('department', function ($data) {
                return $data->department ?? 'N/A';
            })
            ->addColumn('training_category', function ($data) {
                return $data->training_category ?? 'N/A';
            })
            ->addColumn('vendor_name', function ($data) {
                return $data->vendor_name ?? 'N/A';
            })
            ->addColumn('training_duration', function ($data) {
                return ($data->training_duration_days.' Days '. $data->training_duration_hrs.' Hours') ?? 'N/A';
            })
            ->addColumn('training_topic', function ($data) {
                return $data->training_topic ?? 'N/A';
            })
           
            ->addColumn('training_document', function ($data) {
                return '<a target="_blank" href="' . asset('public/uploads/training_document/' . $data->training_document) . '"><label class="text-primary">' . $data->training_document . '</label></a>';
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
