<?php

namespace App\Http\Controllers\admin\admin_report\event_meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MeetingReport extends Controller
{
    
    // public function event_report (){

    //     $company = get_company_name_and_id();
    //     $employee = get_employee_name_and_id();
    //     $vendor = get_vendor_name_and_id();
    //     return view('admin_report.file_manager.event_report', compact('company', 'employee', 'vendor'));
    // } 

    public function meeting_report (Request $request){
        $meeting_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->meeting_type &&  $request->meeting_id){
            $meeting_report = DB::table('meetings')
                ->join('companies', 'companies.id', '=', 'meetings.company_id')
                ->leftjoin('locations', 'locations.id', '=', 'meetings.location_id')
                ->leftjoin('departments', 'departments.id', '=', 'meetings.department_id')
                ->leftjoin('employees', 'employees.id', '=', 'meetings.meeting_proposer_employee')
                ->leftjoin('vendor_category', 'vendor_category.id', '=', 'meetings.vendor_id')
                ->select('meetings.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee','vendor_category.vendor_category_name')
                ->orderby('meetings.id', 'desc')
                ->where(['meetings.meeting_id'=>$request->meeting_id,'meetings.company_id' =>$request->company_id,'meetings.location_id'=>$request->location_id,'meetings.meeting_type'=>$request->meeting_type])
               ->get();
        }
        //dd($event_report);
        $company = get_company_name_and_id();
        $employee = get_employee_name_and_id();
        return view('admin_report.file_manager.meeting_report',compact('company','meeting_report','employee'));
    } 

    public function get_meeting_id(Request $request){
        $meeting_id=DB::table('meetings')->where('location_id',$request->location_id)->select('meeting_id','id')->get();
        return response()->json($meeting_id);
    }

    public function fetch_meeting_report(Request $request){
        $meeting_report = DB::table('meetings')
                ->join('companies', 'companies.id', '=', 'meetings.company_id')
                ->leftjoin('locations', 'locations.id', '=', 'meetings.location_id')
                ->leftjoin('departments', 'departments.id', '=', 'meetings.department_id')
                ->leftjoin('employees', 'employees.id', '=', 'meetings.meeting_proposer_employee')
                ->select('meetings.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'employees.full_name as proposer_employee')
                ->orderby('meetings.id', 'desc')
                ->where(['meetings.id'=>$request->id])
               ->first();
            //    echo json_encode($request->id);
            //    exit();
        $meetings_items_detail=DB::table('meetings_items_detail')->where('meetings_id',$request->id)->get();

          return view('admin_report.file_manager.fetch_meeting_report',compact('meeting_report','meetings_items_detail'));

    }

}


