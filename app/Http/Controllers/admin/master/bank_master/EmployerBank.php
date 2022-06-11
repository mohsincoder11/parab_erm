<?php

namespace App\Http\Controllers\admin\master\bank_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerBank extends Controller
{
    public function employer_bank(){
        return view('masters.bank_masters.bank_master');
    }
}
