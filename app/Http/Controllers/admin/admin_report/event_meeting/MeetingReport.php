<?php

namespace App\Http\Controllers\admin\admin_report\event_meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingReport extends Controller
{
    public function meeting_report (){
        $company = get_company_name_and_id();
        return view('admin_report.vendor_report',compact('company'));
    } 
}
