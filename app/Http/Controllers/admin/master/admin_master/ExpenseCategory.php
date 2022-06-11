<?php

namespace App\Http\Controllers\admin\master\admin_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseCategory extends Controller
{
    public function expenses_category(){
        return view('masters.admin_master.expenses_category');
    }
}
