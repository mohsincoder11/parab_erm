<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\asset_master\CompanyAssetModel;

class CompanyAssets extends Controller
{
    public function company_assets(){
        return view('masters.assets_master.company_assets');
    }
}
