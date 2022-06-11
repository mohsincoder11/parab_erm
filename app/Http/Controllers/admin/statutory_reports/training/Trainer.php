<?php

namespace App\Http\Controllers\admin\statutory_reports\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Trainer extends Controller
{
    public function trainer(){
        return view('statutory_reports.training.trainers');
    }
}
