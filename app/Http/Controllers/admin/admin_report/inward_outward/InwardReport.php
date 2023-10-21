<?php

namespace App\Http\Controllers\admin\admin_report\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class InwardReport extends Controller
{
    public function inward_report (Request $request){

        $inwards_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->inward_type){
            $inwards_report = DB::table('inwards')
        ->join('companies', 'companies.id', '=', 'inwards.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'inwards.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'inwards.department_id')
        ->leftjoin('personal_detail', 'personal_detail.id', '=', 'inwards.employee_id')
         ->select('inwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
        ->orderby('inwards.id', 'desc')
        ->where(['inwards.company_id' =>$request->company_id,'inwards.location_id'=>$request->location_id,'inwards.inward_type'=>$request->inward_type])
        ->get();
        }
        //echo json_encode($inwards_report);
        $company = get_company_name_and_id();
    
        return view('admin_report.file_manager.inward_report',compact('company','inwards_report'));
    } 


    public function fetch_inward_report(Request $request){
        $inwards_report = DB::table('inwards')
        ->join('companies', 'companies.id', '=', 'inwards.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'inwards.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'inwards.department_id')
        ->leftjoin('personal_detail', 'personal_detail.id', '=', 'inwards.employee_id')
         ->select('inwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
        ->orderby('inwards.id', 'desc')
        ->where(['inwards.id'=>$request->id])
        ->first();
        return view('admin_report.file_manager.fetch_inward_report',compact('inwards_report'));

        }
        
}
