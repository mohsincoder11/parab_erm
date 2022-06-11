<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{   
    public function login()
    {
            return view('auth.login');
        
    }
    public function checkLogin(Request $request)
    {
        if (auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with('error','Invalid Login Credentials.');  
        }       
    }
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
