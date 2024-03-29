<?php

namespace App\Http\Controllers\admin\admin_process\admin_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_process\admin_document\PurchaseOrderModel;
use App\Models\admin_process\admin_document\PurchaseOrderItemsDetailsModel;
use DB;

class PurchaseWorkOrder extends Controller
{
    public function purchase_work_order(){
        $company = get_company_name_and_id();
        $expense_category = get_expense_category_name_and_id();
        $vendor_category = get_vendor_category_name_and_id();
        $vendor = get_vendor_name_and_id();
        $purchase_work_order_data = DB::table('purchase_work_order')
        ->join('companies', 'companies.id', '=', 'purchase_work_order.company_id')
        ->leftjoin('locations', 'locations.id', '=', 'purchase_work_order.location_id')
        ->leftjoin('departments', 'departments.id', '=', 'purchase_work_order.department_id')
        ->leftjoin('vendor_category', 'vendor_category.id', '=', 'purchase_work_order.vendor_category_id')
        ->leftjoin('expenses_category', 'expenses_category.id', '=', 'purchase_work_order.expense_category_id')
        ->leftjoin('vendor_details', 'vendor_details.id', '=', 'purchase_work_order.vendor_id')
        ->select('purchase_work_order.*', 'locations.location_name', 'departments.department', 'companies.company_name', 'vendor_category.vendor_category_name','expenses_category.category as expenses_category','vendor_details.vendor_name')
        ->orderby('purchase_work_order.id', 'desc')
        ->get();
        return view('admin_process.admin_documents.purchase_work_order',compact('vendor','company','vendor_category','expense_category','purchase_work_order_data'));
    }

    public function store_purchase_work(Request $request){
        //dd($request->all());
        $PurchaseOrderModel = PurchaseOrderModel::create([          
                    'company_id' => $request->company_id,
                    'location_id' => $request->location_id,
                    'department_id' => $request->department_id,
                    'date' => $request->date,
                    'vendor_category_id' => $request->vendor_category_id,
                    'expense_category_id' => $request->expense_category_id,
                    'vendor_id' => $request->vendor_id,
                    'total_amount' => $request->total_amount,
                    'delivery_date' => $request->delivery_date,
                    'po_wo_validity_days' => $request->po_wo_validity_days,
                    'approved_by' => $request->approved_by,
                    'approved_date' => $request->approved_date,
                    'template_id' => $request->template_id,
                    'generate_po_wo_number' => $request->generate_po_wo_number,
                
                ]);
        foreach($request->quantity as $key => $quantity)
        {
            PurchaseOrderItemsDetailsModel::create([          
                'purchase_work_order_id' => $PurchaseOrderModel->id,
                'quantity' => $quantity,
                'rate' => $request->rate[$key],
                'details' => $request->details[$key],            
            ]);
        }
        
        return back()->with('success', 'Record added successfully.');
    }

    public function edit_purchase_work_order(Request $request)
    {
        $data['PurchaseOrderModel'] = PurchaseOrderModel::where('id', $request->id)->first();
        $data['PurchaseOrderItemsDetailsModel'] = PurchaseOrderItemsDetailsModel::where('purchase_work_order_id', $request->id)->first();
        return response()->json($data);

    }

    public function delete_purchase_work_order(Request $request)
    {
        PurchaseOrderModel::where('id', $request->id)->delete();
        PurchaseOrderItemsDetailsModel::where('purchase_work_order_id', $request->id)->delete();
        return response()->json(1);
    }
}
