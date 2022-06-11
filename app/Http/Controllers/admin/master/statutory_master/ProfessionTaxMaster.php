<?php

namespace App\Http\Controllers\admin\master\statutory_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionTaxMaster extends Controller
{
    public function profession_tax_master(){
        return view('masters.statutory_masters.professiontaxmaster');
    }
}
