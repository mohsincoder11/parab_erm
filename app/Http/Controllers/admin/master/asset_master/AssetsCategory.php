<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsCategory extends Controller
{
    public function assets_category(){
        return view('masters.assets_master.assets_category');
    }
}
