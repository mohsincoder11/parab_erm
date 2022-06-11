<?php

namespace App\Http\Controllers\admin\statutory_reports\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingList extends Controller
{
    public function training_list(){
        return view('statutory_reports.training.traininglist');
    }
}
