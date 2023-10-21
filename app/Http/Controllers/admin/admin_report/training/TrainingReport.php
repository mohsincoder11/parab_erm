<?php

namespace App\Http\Controllers\admin\admin_report\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TrainingReport extends Controller
{
    public function training_calender_report (Request $request){
        $training_calender_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->trainer_id){
            $training_calender_report = DB::table('training_calendar')
            ->join('companies', 'companies.id', '=', 'training_calendar.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_calendar.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'training_calendar.department_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_calendar.training_proposer_employee')
            ->leftjoin('vendor_details', 'vendor_details.id', '=', 'training_calendar.trainer_id')
            ->select('training_calendar.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee', 'vendor_details.vendor_name as trainer_name')
            ->orderby('training_calendar.id', 'desc')
            ->where(['training_calendar.company_id' =>$request->company_id,'training_calendar.location_id'=>$request->location_id,'training_calendar.trainer_id'=>$request->trainer_id])

            ->get();
        }
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        $vendor = get_vendor_name_and_id();
        return view('admin_report.file_manager.training_report',compact('company','training_calender_report','vendor'));
    } 

    public function fetch_training_calender_report(Request $request){
        $training_calender_report = DB::table('training_calendar')
        ->join('companies', 'companies.id', '=', 'training_calendar.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'training_calendar.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'training_calendar.department_id')
        ->leftjoin('employees', 'employees.id', '=', 'training_calendar.training_proposer_employee')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'training_calendar.trainer_id')
        ->select('training_calendar.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee', 'vendor_details.vendor_name as trainer_name')
        ->orderby('training_calendar.id', 'desc')
        ->where(['training_calendar.id'=>$request->id])
        ->first();
            //    echo json_encode($request->id);
            //    exit();
         $training_calender_items_detail=DB::table('training_calender_items_detail')->where('training_calendar_id',$request->id)->get();

          return view('admin_report.file_manager.fetch_training_report',compact('training_calender_report','training_calender_items_detail'));

    }

}
