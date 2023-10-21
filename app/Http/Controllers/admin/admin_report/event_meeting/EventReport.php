<?php

namespace App\Http\Controllers\admin\admin_report\event_meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  DB;
class EventReport extends Controller
{
    // public function event_report (){

    //     $company = get_company_name_and_id();
    //     $employee = get_employee_name_and_id();
    //     $vendor = get_vendor_name_and_id();
    //     return view('admin_report.file_manager.event_report', compact('company', 'employee', 'vendor'));
    // } 

    public function event_report (Request $request){
        $event_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->event_type &&  $request->event_id){
            $event_report = DB::table('events')
                ->join('companies', 'companies.id', '=', 'events.company_id')
                ->leftjoin('locations', 'locations.id', '=', 'events.location_id')
                ->leftjoin('departments', 'departments.id', '=', 'events.department_id')
                ->leftjoin('employees', 'employees.id', '=', 'events.event_proposer_employee')
                ->leftjoin('vendor_category', 'vendor_category.id', '=', 'events.vendor_id')

                ->select('events.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee','vendor_category.vendor_category_name')
                ->orderby('events.id', 'desc')
                ->where(['events.event_id'=>$request->event_id,'events.company_id' =>$request->company_id,'events.location_id'=>$request->location_id,'events.event_type'=>$request->event_type])
               ->get();
        }
        //dd($event_report);
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        return view('admin_report.file_manager.event_report',compact('company','event_report','employee'));
    } 

    public function get_event_id(Request $request){
        $event_id=DB::table('events')->where('location_id',$request->location_id)->select('event_id','id')->get();
        return response()->json($event_id);
    }

    public function fetch_event_report(Request $request){
        $event_report = DB::table('events')
                ->join('companies', 'companies.id', '=', 'events.company_id')
                ->leftjoin('locations', 'locations.id', '=', 'events.location_id')
                ->leftjoin('departments', 'departments.id', '=', 'events.department_id')
                ->leftjoin('employees', 'employees.id', '=', 'events.event_proposer_employee')
                ->select('events.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee')
                ->orderby('events.id', 'desc')
                ->where(['events.id'=>$request->id])
               ->first();
            //    echo json_encode($request->id);
            //    exit();
        $events_items_detail=DB::table('events_items_detail')->where('events_id',$request->id)->get();

          return view('admin_report.file_manager.fetch_event_report',compact('event_report','events_items_detail'));

    }

}
