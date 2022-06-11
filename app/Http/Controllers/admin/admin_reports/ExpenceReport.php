<?php

namespace App\Http\Controllers\admin\admin_reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenceReport extends Controller
{
    public function expence_report(){
        return view('admin_reports.expence_report');
    }
}
