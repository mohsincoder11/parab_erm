<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherMaster extends Controller
{
    public function other_master(){
        return view('masters.employee_masters.othermaster');
    }
}
