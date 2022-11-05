<?php

namespace App\Http\Controllers\admin\admin_report\inward_outward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OutwardReport extends Controller
{
    public function outward_report (){
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company'));
    } 

}
