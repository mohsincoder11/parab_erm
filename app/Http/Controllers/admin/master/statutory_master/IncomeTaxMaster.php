<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeTaxMaster extends Controller
{
    public function income_tax_master(){
        return view('masters.statutory_masters.incometaxmaster');
    }
}
