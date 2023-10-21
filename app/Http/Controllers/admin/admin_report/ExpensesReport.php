<?php

namespace App\Http\Controllers\admin\admin_report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\ExpenseCategoryModel;
use App\Models\admin_master\VendorCategoryModel;
use DB;

class ExpensesReport extends Controller
{
    public function expenses_report(Request $request){
        $expenses_report=[];
        //dd($request->all());
        if($request->company_id && $request->location_id){
            $expenses_report = DB::table('expenses_category')
        ->join('companies', 'companies.id', '=', 'expenses_category.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'expenses_category.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'expenses_category.department_id')
        // ->leftjoin('personal_detail', 'personal_detail.id', '=', 'expenses_category.employee_id')
         ->select('expenses_category.*', 'locations.location_name', 'departments.department', 'companies.company_name')
        ->orderby('expenses_category.id', 'desc')
        ->where(['expenses_category.company_id' =>$request->company_id,'expenses_category.location_id'=>$request->location_id])
        ->get();
        }
        $company = get_company_name_and_id();
        return view('admin_report.expenses_report',compact('company','expenses_report'));
    }

    function get_expense_category_by_location_company(Request $request){
        $data=ExpenseCategoryModel::select('id','category')->where('company_id',$request->company_id)->where('location_id',$request->location_id)->get();
        return response()->json($data);
    }

    
    function get_vendor_category_by_location_company_expense_category(Request $request){
        $data=VendorCategoryModel::select('id','vendor_category_name')->where('company_id',$request->company_id)->where('location_id',$request->location_id)->where('expense_category_id',$request->expense_category_id)->get();
        return response()->json($data);
    }
    
      public function fetch_expenses_report(Request $request)
      {
       
        $expenses_report = DB::table('expenses_category')
        ->join('companies', 'companies.id', '=', 'expenses_category.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'expenses_category.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'expenses_category.department_id')
        // ->leftjoin('personal_detail', 'personal_detail.id', '=', 'expenses_category.employee_id')
         ->select('expenses_category.*', 'locations.location_name', 'departments.department', 'companies.company_name')
        ->orderby('expenses_category.id', 'desc')
        ->where(['expenses_category.id'=>$request->id])
        ->first();

        return view('admin_report.file_manager.fetch_expenses_report',compact('expenses_report'));

        }
 }


