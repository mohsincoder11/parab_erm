<?php

namespace App\Http\Controllers\admin\statutory_reports\event_and_meetings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Events extends Controller
{
    public function events(){
        return view('statutory_reports.events-and-meetings.events');
    }
}
