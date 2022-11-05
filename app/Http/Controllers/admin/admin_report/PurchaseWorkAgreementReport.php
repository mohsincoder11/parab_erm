<?php

namespace App\Http\Controllers\admin\admin_report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseWorkAgreementReport extends Controller
{
    
    public function purchase_work_order_agreement (){
        $company = get_company_name_and_id();
        return view('admin_report.purchase_work_order_report',compact('company'));
    } 

}
