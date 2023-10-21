<?php

namespace App\Http\Controllers\admin\admin_report\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TrainingCertificateReport extends Controller
{

    
    public function training_certificate_report (Request $request)
    {

        $training_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->meeting_participant_employee){
            $training_report = DB::table('training_certificate')
            ->join('companies', 'companies.id', '=', 'training_certificate.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_certificate.location_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_certificate.meeting_participant_employee')
            ->leftjoin('training_calendar', 'training_calendar.id', '=', 'training_certificate.training_calendar_id')

            ->select('training_certificate.*', 'locations.location_name', 'companies.company_name', 'employees.full_name as meeting_participant_employee', 'training_calendar.training_code','training_calendar.training_start_time','training_calendar.training_end_time','training_calendar.training_start_date','training_calendar.training_end_date','training_calendar.estimate_training_cost')

            ->orderby('training_certificate.id', 'desc')

        ->where(['training_certificate.company_id' =>$request->company_id,'training_certificate.location_id'=>$request->location_id,'training_certificate.meeting_participant_employee'=>$request->meeting_participant_employee])
        ->get();
        }
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();

        //echo json_encode($training_report);
        return view('admin_report.file_manager.training_certificate_report',compact('company','training_report','employee'));
       } 
    
       public function get_training_id(Request $request){
        $training_code=DB::table('training_calendar')->where('location_id',$request->location_id)->select('training_code','id')->get();
        return response()->json($training_code);
    }

    public function get_event_id(Request $request){
        $event_id=DB::table('events')->where('location_id',$request->location_id)->select('event_id','id')->get();
        return response()->json($event_id);
    }

    public function fetch_training_report(Request $request){
        $training_report = DB::table('training_certificate')
            ->join('companies', 'companies.id', '=', 'training_certificate.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'training_certificate.location_id')
            ->leftjoin('employees', 'employees.id', '=', 'training_certificate.meeting_participant_employee')
            ->leftjoin('training_calendar', 'training_calendar.id', '=', 'training_certificate.training_calendar_id')

            ->select('training_certificate.*', 'locations.location_name', 'companies.company_name', 'employees.full_name as meeting_participant_employee', 'training_calendar.training_code','training_calendar.training_start_time','training_calendar.training_end_time','training_calendar.training_start_date','training_calendar.training_end_date','training_calendar.estimate_training_cost')

            ->orderby('training_certificate.id', 'desc')
                ->where(['training_certificate.id'=>$request->id])
               ->first();
            //    echo json_encode($request->id);
            //    exit();
        // $events_items_detail=DB::table('events_items_detail')->where('events_id',$request->id)->get();

          return view('admin_report.file_manager.fetch_training_certificate',compact('training_report'));

    }


}
    
