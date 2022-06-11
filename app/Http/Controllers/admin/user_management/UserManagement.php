<?php

namespace App\Http\Controllers\admin\user_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManagement extends Controller
{
    public function user_management(){
        return view('user_management.user_management');
    }
}
