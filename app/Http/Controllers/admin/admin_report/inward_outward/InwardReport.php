<?php

namespace App\Http\Controllers\admin\admin_report\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InwardReport extends Controller
{
    public function inward_report (){
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company'));
    } 

}
