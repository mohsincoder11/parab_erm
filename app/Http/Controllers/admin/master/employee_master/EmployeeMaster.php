<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeMaster extends Controller
{
    public function employee_master(){
        return view('masters.employee_masters.employee_master');
    }
}
