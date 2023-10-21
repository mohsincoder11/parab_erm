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
        public function vendor_report (Request $request){
            $purchase_work_order_data=[];
            if($request->company_id && $request->po_wo_number){
                $purchase_work_order_data = DB::table('vendor_category')
            ->join('companies', 'companies.id', '=', 'vendor_category.company_id')
            ->leftjoin('locations', 'locations.id', '=', 'vendor_category.location_id')
            ->leftjoin('departments', 'departments.id', '=', 'vendor_category.department_id')
           // ->leftjoin('vendor_category', 'vendor_category.id', '=', 'vendor_category.vendor_category_id')
            ->leftjoin('expenses_category', 'expenses_category.id', '=', 'vendor_category.expense_category_id')
            ->leftjoin('vendor_details', 'vendor_details.id', '=', 'vendor_category.vendor_id')
            ->leftjoin('template_format', 'template_format.template_id', '=', 'vendor_category.template_id')
    
            ->select('vendor_category.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name','template_format.template_file')
            ->orderby('vendor_category.id', 'desc')
            ->where(['vendor_category.id' =>$request->po_wo_number])
            ->get();
            }
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company','purchase_work_order_data'));
    } 

    
    function get_vendor_category_by_company(Request $request){
        $data=VendorCategoryModel::select('id','vendor_category_name')->where('company_id',$request->company_id)->get();
        return response()->json($data);
    }

    function get_vendor_details_by_vendor_category(Request $request){
        $data=VendorDetailsModel::select('id','vendor_name')
        ->where('vendor_category_id',$request->vendor_category_id)
        ->when($request->expense_category_id, function($query) use ($request) {
            $query->where('expense_category_id', $request->expense_category_id);
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

    



    public function purchase_work_order_agreement1 (Request $request){
        $purchase_work_order_data=[];
        if($request->company_id && $request->vendor_category && $request->vendor_category_name){
            $purchase_work_order_data = DB::table('vendor_category')
        ->join('companies', 'companies.id', '=', 'vendor_category.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'vendor_category.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'vendor_category.department_id')
       // ->leftjoin('vendor_category', 'vendor_category.id', '=', 'vendor_category.vendor_category_id')
        ->leftjoin('expenses_category', 'expenses_category.id', '=', 'vendor_category.expense_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'vendor_category.vendor_id')
        ->leftjoin('template_format', 'template_format.template_id', '=', 'vendor_category.template_id')

        ->select('vendor_category.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name','template_format.template_file')
        ->orderby('vendor_category.id', 'desc')
        ->where(['vendor_category.id' =>$request->vendor_category_name])
        ->get();
        }
        
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company','purchase_work_order_data'));
    } 

    public function get_po_wo_by_company_id(Request $request){
        $powo_number=DB::table('vendor_category')->where('company_id',$request->company_id)->select('vendor_category_name','id')->get();
        return response()->json($powo_number);
    }

    public function fetch_work_purchase_work_order_agreement1(Request $request){
        $purchase_work_order_data = DB::table('vendor_category')
        ->join('companies', 'companies.id', '=', 'vendor_category.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'vendor_category.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'vendor_category.department_id')
        //->leftjoin('vendor_category', 'vendor_category.id', '=', 'vendor_category.vendor_category_id')
        ->leftjoin('expenses_category', 'expenses_category.id', '=', 'vendor_category.expense_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'vendor_category.vendor_id')
        ->leftjoin('template_format', 'template_format.template_id', '=', 'vendor_category.template_id')
        ->select('vendor_category.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name','template_format.template_file')
        ->orderby('vendor_category.id', 'desc')
        ->where(['vendor_category.id' =>$request->id])
        ->first();
        $purchase_work_order_items=DB::table('purchase_work_order_items_detail')->where('purchase_work_order_id',$purchase_work_order_data->id)->get();
        return view('admin_report.vendor_report',compact('purchase_work_order_data','purchase_work_order_items'));

    }



}
