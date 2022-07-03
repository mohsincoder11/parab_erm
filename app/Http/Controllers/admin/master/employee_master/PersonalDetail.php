<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\employee_master\PersonalDetailModel;
use DB;
use Yajra\DataTables\DataTables;

class PersonalDetail extends Controller
{
    public function personal_details()
    {
        return view('masters.employee_masters.personal_details');
    }

    public function store_personal_details(Request $request)
    {
        PersonalDetailModel::create([
            'employee_name'=>$request->employee_name,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'city'=>$request->city,
            'pincode'=>$request->pincode,
            'contact_no'=>$request->contact_no,
            'gender'=>$request->gender,
            'blood_group'=>$request->blood_group,
            'marital_status'=>$request->marital_status,
            'spouse_name'=>$request->spouse_name,
            'marriage_date'=>$request->marriage_date,
            'personal_email'=>$request->personal_email,
            'emergency_contact_no'=>$request->emergency_contact_no,
            'pan_no'=>$request->pan_no,
            'adhar_no'=>$request->adhar_no,
            'driving_license_no'=>$request->driving_license_no,
         
        ]);

        return back()->with('success', 'Record added successfully.');
    }
    public function edit_personal_details(Request $request)
    {
        $official_detail=PersonalDetailModel::where('id', $request->id)->first();
        return response()->json($official_detail);
    }
    public function update_personal_details(Request $request)
    {
        PersonalDetailModel::where('id', $request->id)->update([
            'employee_name'=>$request->employee_name,
            'dob'=>date('Y-m-d', strtotime($request->dob)),
            'address'=>$request->address,
            'city'=>$request->city,
            'pincode'=>$request->pincode,
            'contact_no'=>$request->contact_no,
            'gender'=>$request->gender,
            'blood_group'=>$request->blood_group,
            'marital_status'=>$request->marital_status,
            'spouse_name'=>$request->spouse_name,
            'marriage_date'=>$request->marriage_date,
            'personal_email'=>$request->personal_email,
            'emergency_contact_no'=>$request->emergency_contact_no,
            'pan_no'=>$request->pan_no,
            'adhar_no'=>$request->adhar_no,
            'driving_license_no'=>$request->driving_license_no,
            

        ]);

        return back()->with('success', 'Record updated successfully.');
    }
    public function delete_personal_details(Request $request)
    {
        PersonalDetailModel::where('id', $request->id)->delete();
        return response()->json(1);
    }
    public function get_personal_details(Request $request)
    {
        $data = DB::table('personal_detail')
                ->orderby('id', 'desc')
            ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns([
                'employee_name', 'dob', 'address', 'city', 'pincode', 'contact_no', 'gender', 'blood_group', 'marital_status', 'spouse_name',                
                'marriage_date', 'personal_email', 'emergency_contact_no', 'pan_no', 'adhar_no', 'driving_license_no', 
                'action'

            ])
            ->addColumn('employee_name', function ($data) {
                return $data->employee_name;
            })
            ->addColumn('dob', function ($data) {
                return $data->dob;
            })
            ->addColumn('address', function ($data) {
                return $data->address;
            })
            ->addColumn('city', function ($data) {
                return $data->city;
            })
            ->addColumn('pincode', function ($data) {
                return $data->pincode;
            })
            ->addColumn('contact_no', function ($data) {
                return $data->contact_no;
            })
            ->addColumn('gender', function ($data) {
                return $data->gender;
            })

            ->addColumn('blood_group', function ($data) {
                return $data->blood_group;
            })
            ->addColumn('marital_status', function ($data) {
                return $data->marital_status;
            })
            ->addColumn('spouse_name', function ($data) {
                return $data->spouse_name;
            })
            
            ->addColumn('marriage_date', function ($data) {
                return $data->marriage_date;
            })
            ->addColumn('personal_email', function ($data) {
                return $data->personal_email;
            })
            ->addColumn('emergency_contact_no', function ($data) {
                return $data->emergency_contact_no;
            })
            ->addColumn('pan_no', function ($data) {
                return $data->pan_no;
            })
            ->addColumn('adhar_no', function ($data) {
                return $data->adhar_no;
            })
            ->addColumn('driving_license_no', function ($data) {
                return $data->driving_license_no;
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


