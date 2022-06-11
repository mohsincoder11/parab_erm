<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function category(){
        return view('masters.assets_master.category');
    }
}
