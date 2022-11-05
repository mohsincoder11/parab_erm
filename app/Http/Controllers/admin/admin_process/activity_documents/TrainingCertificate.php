<?php

namespace App\Http\Controllers\admin\admin_process\activity_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\activity_document\TrainingCertificateModel;
use App\Models\admin_process\training\TrainingCalendarModel;

use Yajra\DataTables\DataTables;
use DB;


class TrainingCertificate extends Controller
{
    public function training_certificate()
    {
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $training_code = TrainingCalendarModel::select('training_code','id')->orderby('id','desc')->get();

        return view('admin_process.activity_documents.training_certificate', compact('company', 'employee', 'training_code'));
    }

    public function store_training_certificate(Request $request)
    {


        TrainingCertificateModel::create([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'training_date' => $request->training_date,
            'training_calendar_id' => $request->training_calendar_id,
            'meeting_participant_employee' => $request->meeting_participant_employee,
            'certificate_template' => $request->certificate_template,
            'remark' => $request->remark,

        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_training_certificate(Request $request)
    {
        TrainingCertificateModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function update_training_certificate(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'event' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/events'), $file_name);
        } else if ($request->old_file) {
            $file_name = $request->old_file;
        } else {
            $file_name = '';
        }
        TrainingCertificateModel::where('id', $request->id)->update([
            'company_id' => $request->company_id,
            'location_id' => $request->location_id,
            'training_date' => $request->training_date,
            'training_calendar_id' => $request->training_calendar_id,
            'meeting_participant_employee' => $request->meeting_participant_employee,
            'certificate_template' => $request->certificate_template,
            'remark' => $request->remark,


        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function edit_training_certificate(Request $request)
    {
        $data = DB::table('training_certificate')
            ->where('training_certificate.id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function get_training_certificate()
    {
        $data = DB::table('training_certificate')
            ->join('companies', 'companies.id', '=', 'training_certificate.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_certificate.location_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_certificate.meeting_participant_employee')
            ->leftjoin('training_calendar', 'training_calendar.id', '=', 'training_certificate.training_calendar_id')

            ->select('training_certificate.*', 'locations.location_name', 'companies.company_name', 'employees.full_name as meeting_participant_employee', 'training_calendar.training_code')
            ->orderby('training_certificate.id', 'desc')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'company_name', 'location_name', 'training_date', 'training_code','meeting_participant_employee', 'certificate_template', 'remark', 'action'
            ])

            ->addColumn('company_name', function ($data) {
                return $data->company_name;
            })
            ->addColumn('location_name', function ($data) {
                return $data->location_name;
            })

            ->addColumn('training_date', function ($data) {
                return  $data->training_date;
            })
            ->addColumn('training_code', function ($data) {
                return $data->training_code;
            })
            ->addColumn('meeting_participant_employee', function ($data) {
                return $data->meeting_participant_employee;
            })

            ->addColumn('certificate_template', function ($data) {
                return $data->certificate_template;
            })

            ->addColumn('remark', function ($data) {
                return $data->remark;
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
