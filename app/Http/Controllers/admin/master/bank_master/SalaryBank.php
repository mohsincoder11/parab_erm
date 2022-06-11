<?php

namespace App\Http\Controllers\admin\master\bank_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalaryBank extends Controller
{
    public function salary_bank(){
        return view('masters.bank_masters.salary_bank');
    }
}
