<?php

namespace App\Http\Controllers\admin\admin_report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_master\VendorDetailsModel;
use App\Models\admin_master\VendorCategoryModel;
use App\Models\admin_master\ExpenseCategoryModel
;
class VendorReport extends Controller
{
    public function vendor_report (){
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company'));
    } 

    
    function get_vendor_category_by_company(Request $request){
        $data=VendorCategoryModel::select('id','vendor_category_name')->where('company_id',$request->company_id)->get();
        return response()->json($data);
    }

    function get_vendor_details_by_vendor_category(Request $request){
        $data=VendorDetailsModel::select('id','vendor_name')->where('vendor_category_id',$request->vendor_category_id)
        ->when($request->expense_category_id, function($query) use ($request) {
            $query->where('expense_category_id', $request->company_id);
         })
        ->get();
        return response()->json($data);
    }

    function get_vendor_category_by_expense_category(Request $request){
        $data=VendorCategoryModel::select('id','vendor_category_name')->where('company_id',$request->company_id)->where('expense_category_id',$request->expense_category_id)->get();
        return response()->json($data);
    }

    function get_expense_category_by_company(Request $request){
        $data=ExpenseCategoryModel::select('id','category')->where('company_id',$request->company_id)->get();
        return response()->json($data);
    }

    

}
