<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyAssets extends Controller
{
    public function company_assets(){
        return view('masters.assets_master.company_assets');
    }
}
