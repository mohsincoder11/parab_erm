<?php

namespace App\Http\Controllers\admin\admin_report\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use function GuzzleHttp\json_encode;

class OutwardReport extends Controller
{
    public function outward_report (Request $request){
        $outwards_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id && $request->employee_id){
            $outwards_report = DB::table('outwards')
            ->join('companies', 'companies.id', '=', 'outwards.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'outwards.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'outwards.department_id')
            ->leftjoin('personal_detail', 'personal_detail.id', '=', 'outwards.employee_id')
             ->select('outwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
            ->orderby('outwards.id', 'desc')
            ->where(['outwards.company_id' =>$request->company_id,'outwards.location_id'=>$request->location_id,'outwards.employee_id'=>$request->employee_id])
            ->get();
        }
        //echo json_encode($outwards_report);

        $company = get_company_name_and_id();
        return view('admin_report.file_manager.outward_report',compact('company','outwards_report'));
    } 

    public function fetch_outward_report(Request $request){
        $outwards_report = DB::table('outwards')
            ->join('companies', 'companies.id', '=', 'outwards.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'outwards.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'outwards.department_id')
            ->leftjoin('personal_detail', 'personal_detail.id', '=', 'outwards.employee_id')
             ->select('outwards.*', 'locations.location_name', 'departments.department', 'companies.company_name','personal_detail.employee_name')
            ->orderby('outwards.id', 'desc')
        ->where(['outwards.id'=>$request->id])
        ->first();
        return view('admin_report.file_manager.fetch_outward_report',compact('outwards_report'));

        }

}
