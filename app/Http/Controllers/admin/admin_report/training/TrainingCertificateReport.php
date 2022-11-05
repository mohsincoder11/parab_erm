<?php

namespace App\Http\Controllers\admin\admin_report\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingCertificateReport extends Controller
{
    public function training_certificate_report (){
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company'));
    } 

}
