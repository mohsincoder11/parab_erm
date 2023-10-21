<?php

namespace App\Http\Controllers\admin\admin_process\admin_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\admin_document\PaymentOrderModel;
use App\TemplateFormat;
use DB;
class PaymentOrder extends Controller
{
    //
    public function payment_order (){
        $company = get_company_name_and_id();
        $template = TemplateFormat :: all();

        $expense_category = get_expense_category_name_and_id();
        $vendor_category = get_vendor_category_name_and_id();
        $vendor = get_vendor_name_and_id();
        $purchase_invoice = DB::table('purchase_invoice')->select('id','invoice_number')->orderby('id','desc')->get();
        $payment_order = DB::table('payment_order')
        ->join('companies', 'companies.id', '=', 'payment_order.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'payment_order.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'payment_order.department_id')
        ->leftjoin('vendor_category', 'vendor_category.id', '=', 'payment_order.vendor_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'payment_order.vendor_id')
        ->leftjoin('purchase_invoice', 'purchase_invoice.id', '=', 'payment_order.purchase_invoice_id')
        ->leftjoin('template_format', 'template_format.template_id', '=', 'payment_order.template_id')

        ->select('payment_order.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','vendor_details.vendor_name','purchase_invoice.invoice_number','template_format.template_file')
        ->orderby('payment_order.id', 'desc')
        ->get();
        return view('admin_process.admin_documents.payment_order',compact('vendor','company','vendor_category','expense_category','payment_order','purchase_invoice','template'));
    }

    public function fetch_purchase_invoice_detail(Request $request){
        return response()->json(DB::table('purchase_invoice')->select('invoice_date','total_amount','order_details')->where('id',$request->id)->first());
    }

    public function store_payment_order (Request $request){
        //dd($request->all());
        $PaymentOrderModel = PaymentOrderModel::create([          
                    'company_id' => $request->company_id,
                    'location_id' => $request->location_id,
                    'department_id' => $request->department_id,
                    'date' => $request->date,
                    'vendor_category_id' => $request->vendor_category_id,
                    'purchase_invoice_id' => $request->purchase_invoice_id,
                    'vendor_id' => $request->vendor_id,
                    'payment_date' => $request->payment_date,
                    'payment_mode' => $request->payment_mode,
                    'payment_ref_no' => $request->payment_ref_no,
                    'authority_name' => $request->authority_name,
                    'template_format' => $request->template_format,
                    'payment_order_no' => $request->payment_order_no,
                    'approved_date' => $request->approved_date,
                    'template_id' => $request->template_id,
                
                ]);
        
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_payment_order (Request $request){
        
        PaymentOrderModel::where('id', $request->id)->delete();
        return response()->json(1);

    }
    
}

