<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Assets extends Controller
{
    public function assets(){
        return view('masters.assets_master.assets');
    }
}
