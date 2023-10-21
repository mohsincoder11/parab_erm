<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeProfileController extends Controller
{
  public function addprofile(Request $request){
    $profile=$request->profile;

    if (isset($profile))
    {

        if ($profile->isValid())
        {
            $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $profile->getClientOriginalExtension();
            $profile->move('public/employeeprofile/', $file_name);
        }
    }else{
       $file_name=null;
    }

    $result=Employee::where('id',$request->hidden_id)
                    ->update([
                        'profile'=>$file_name
                    ]);
    if($result==1){
            return response()->json(['success'=>'Profile Added Successfully!']);
        }else{
            return response()->json(['error'=>'something wents Wrong!']);
        }
   
  }
}