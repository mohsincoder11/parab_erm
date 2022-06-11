<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficialDetails extends Controller
{
    public function official_details(){
        return view('masters.employee_masters.officialdetails');
    }
}
