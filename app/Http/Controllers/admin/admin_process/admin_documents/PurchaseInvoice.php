<?php

namespace App\Http\Controllers\admin\admin_process\admin_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\admin_process\admin_document\PurchaseInvoiceModel;
use App\Models\admin_process\admin_document\PurchaseInvoiceItemDetailsModel
;

class PurchaseInvoice extends Controller
{
    //
    public function purchase_invoice (){
        $company = get_company_name_and_id();
        $expense_category = get_expense_category_name_and_id();
        $vendor_category = get_vendor_category_name_and_id();
        $vendor = get_vendor_name_and_id();
        $purchase_invoice = DB::table('purchase_invoice')
        ->join('companies', 'companies.id', '=', 'purchase_invoice.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'purchase_invoice.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'purchase_invoice.department_id')
        ->leftjoin('vendor_category', 'vendor_category.id', '=', 'purchase_invoice.vendor_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'purchase_invoice.vendor_id')
        ->select('purchase_invoice.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','vendor_details.vendor_name')
        ->orderby('purchase_invoice.id', 'desc')
        ->get();
        // echo json_encode($purchase_invoice);
        // dd(1);
        return view('admin_process.admin_documents.purchase_invoice',compact('vendor','company','vendor_category','expense_category','purchase_invoice'));
    }

   
    public function store_purchase_invoice (Request $request){
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file_name = 'purchase' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin-process/admin-document/purchase-invoice'), $file_name);
        }
        //dd($request->all());
        $purchase_invoice = PurchaseInvoiceModel::create([          
                    'company_id' => $request->company_id,
                    'location_id' => $request->location_id,
                    'department_id' => $request->department_id,
                    'date' => $request->date,
                    'vendor_category_id' => $request->vendor_category_id,
                    'vendor_id' => $request->vendor_id,
                    'invoice_date' => $request->invoice_date,
                    'invoice_number' => $request->invoice_number,
                    'order_details' => $request->order_details,
                    'total_amount' => $request->total_amount,
                    'delivery_date' => $request->delivery_date,
                    'approved_by' => $request->approved_by,
                    'approved_date' => $request->approved_date,
                    'file' => $file_name,
                
                ]);
                if(isset($request->quantity)){
        foreach($request->quantity as $key => $quantity)
        {
            PurchaseInvoiceItemDetailsModel::create([          
                'purchase_invoice_id' => $purchase_invoice->id,
                'item_id' => $request->item_id[$key],
                'quantity' => $quantity,
                'rate' => $request->rate[$key],
            ]);
        }
    }

        
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_purchase_invoice(Request $request){
        
        PurchaseInvoiceModel::where('id', $request->id)->delete();
        PurchaseInvoiceItemDetailsModel::where('agreements_id', $request->id)->delete();
        return response()->json(1);

    }
}

