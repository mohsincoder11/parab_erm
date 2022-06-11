<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeePF extends Controller
{
    public function employee_pf_master(){
        return view('masters.statutory_masters.employeepfmaster');
    }
}
