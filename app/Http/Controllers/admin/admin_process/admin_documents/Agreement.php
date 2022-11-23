<?php

namespace App\Http\Controllers\admin\admin_process\admin_documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\admin_process\admin_document\AgreementModel;
use App\Models\admin_process\admin_document\AgreementItemsDetailsModel;
use App\Models\admin_master\VendorDetailsModel;

class Agreement extends Controller
{
    public function agreement(){
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
        return view('admin_process.admin_documents.agreement',compact('vendor','company','vendor_category','expense_category','purchase_work_order_data'));
    }

    public function get_vendor_name(Request $request){
        $vendor_details=VendorDetailsModel::select('vendor_name')->where('id',$request->id)->first();         
        return $vendor_details;
    }

    public function store_agreement(Request $request){
        //dd($request->all());
        $AgreementModel = AgreementModel::create([          
                    'company_id' => $request->company_id,
                    'location_id' => $request->location_id,
                    'department_id' => $request->department_id,
                    'date' => $request->date,
                    'vendor_category_id' => $request->vendor_category_id,
                    'expense_category_id' => $request->expense_category_id,
                    'vendor_id' => $request->vendor_id,
                    'vendor_representative_name' => $request->vendor_representative_name,
                    'total_amount' => $request->total_amount,
                    'agreement_period' => $request->agreement_period,
                    'agreement_terms' => $request->agreement_terms,
                    'agreement_value' => $request->agreement_value,
                    'approved_by' => $request->approved_by,
                    'approved_by_designation' => $request->approved_by_designation,
                    'approved_date' => $request->approved_date,
                    'template_id' => $request->template_id,
                    'generated_agreement_number' => $request->generated_agreement_number,
                
                ]);
        foreach($request->quantity as $key => $quantity)
        {
            AgreementItemsDetailsModel::create([          
                'agreements_id' => $AgreementModel->id,
                'service_id' => $request->service_id[$key],
                'quantity' => $quantity,
                'rate' => $request->rate[$key],
                'details' => $request->details[$key],            
            ]);
        }
        
        return back()->with('success', 'Record added successfully.');
    }

    public function delete_agreement(Request $request){
        
        AgreementModel::where('id', $request->id)->delete();
        AgreementItemsDetailsModel::where('agreements_id', $request->id)->delete();
        return response()->json(1);

    }
}
