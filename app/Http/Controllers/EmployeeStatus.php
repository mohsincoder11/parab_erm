<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeStatus extends Controller
{
    public function employee_status(){
        return view('masters.hr_masters.employee_status');
    }
}
