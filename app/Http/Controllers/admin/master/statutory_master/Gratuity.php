<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Gratuity extends Controller
{
    public function gratuity(){
        return view('masters.statutory_masters.gratuity');
    }
}
