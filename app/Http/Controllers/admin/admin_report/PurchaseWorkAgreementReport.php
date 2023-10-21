<?php

namespace App\Http\Controllers\admin\admin_report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PurchaseWorkAgreementReport extends Controller
{
    
    public function purchase_work_order_agreement (Request $request){
        $purchase_work_order_data=[];
        if($request->company_id && $request->po_wo_number){
            $purchase_work_order_data = DB::table('purchase_work_order')
        ->join('companies', 'companies.id', '=', 'purchase_work_order.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'purchase_work_order.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'purchase_work_order.department_id')
        ->leftjoin('vendor_category', 'vendor_category.id', '=', 'purchase_work_order.vendor_category_id')
        ->leftjoin('expenses_category', 'expenses_category.id', '=', 'purchase_work_order.expense_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'purchase_work_order.vendor_id')
        ->select('purchase_work_order.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name')
        ->orderby('purchase_work_order.id', 'desc')
        ->where(['purchase_work_order.id' =>$request->po_wo_number])
        ->get();
        }
        
        $company = get_company_name_and_id();
        return view('admin_report.purchase_work_order_report',compact('company','purchase_work_order_data'));
    } 

    public function get_po_wo_by_company_id(Request $request){
        $powo_number=DB::table('purchase_work_order')->where('company_id',$request->company_id)->select('generate_po_wo_number','id')->get();
        return response()->json($powo_number);
    }

    public function fetch_work_purchase_work_order_agreement(Request $request){
        $purchase_work_order_data = DB::table('purchase_work_order')
        ->join('companies', 'companies.id', '=', 'purchase_work_order.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'purchase_work_order.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'purchase_work_order.department_id')
        ->leftjoin('vendor_category', 'vendor_category.id', '=', 'purchase_work_order.vendor_category_id')
        ->leftjoin('expenses_category', 'expenses_category.id', '=', 'purchase_work_order.expense_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'purchase_work_order.vendor_id')
        ->select('purchase_work_order.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name')
        ->orderby('purchase_work_order.id', 'desc')
        ->where(['purchase_work_order.id' =>$request->id])
        ->first();
        $purchase_work_order_items=DB::table('purchase_work_order_items_detail')->where('purchase_work_order_id',$purchase_work_order_data->id)->get();
        return view('admin_report.fetch_purchase_work_order_report',compact('purchase_work_order_data','purchase_work_order_items'));

    }

}
