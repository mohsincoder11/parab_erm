<?php

namespace App\Http\Controllers\admin\admin_reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobPost extends Controller
{
    public function job_post(){
        return view('admin_reports.job_post_master');
    }
}
