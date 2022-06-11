<?php

namespace App\Http\Controllers\admin\master\hr_document;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Award extends Controller
{
    public function award()
    {
        $company = get_company_name_and_id();
        return view('general_master.award', compact('company'));
    }
}
