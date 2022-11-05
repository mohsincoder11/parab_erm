<?php

namespace App\Http\Controllers\admin\admin_report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\ExpenseCategoryModel;
use App\Models\admin_master\VendorCategoryModel;


class ExpensesReport extends Controller
{
    public function expenses_report(){
        $company = get_company_name_and_id();
        return view('admin_report.expenses_report',compact('company'));
    }

    function get_expense_category_by_location_company(Request $request){
        $data=ExpenseCategoryModel::select('id','category')->where('company_id',$request->company_id)->where('location_id',$request->location_id)->get();
        return response()->json($data);
    }

    
    function get_vendor_category_by_location_company_expense_category(Request $request){
        $data=VendorCategoryModel::select('id','vendor_category_name')->where('company_id',$request->company_id)->where('location_id',$request->location_id)->where('expense_category_id',$request->expense_category_id)->get();
        return response()->json($data);
    }
    
}
