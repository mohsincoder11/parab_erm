<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ESICMaster extends Controller
{
    public function esic_master(){
        return view('masters.statutory_masters.ESICmaster');
    }
}
