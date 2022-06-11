<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveType;
use App\Company;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{
    public function LeaveType()
    {
       
            $companies=Company::all();
            $leave_types=LeaveType::join('companies','companies.id','=','leave_types.company_id')
                                    ->select('companies.company_name','leave_types.*')
                                    ->get();
            return view('masters.hr_masters.LeaveType',compact('companies','leave_types'));        
    }
    public function storeLeaveType(Request $request)
    {
       
            $validator = Validator::make($request->only('company_id','leave_type','allocated_day'),
                [
                    'company_id' => 'required',
                    'leave_type' => 'required',
                    'allocated_day' => 'nullable|numeric',
                ]
             // ,
             // [
             //     'leave_type.required' => 'Leave name can not be empty',
             //     'leave_type.unique'  => 'Leave name already exist',
             //     'allocated_day.numeric' => 'day must be a number',
             // ]
            );


            if ($validator->fails())
            {
                return response()->json(['errors' => $validator->errors()->all()]);
            }

            $data = [];

            $data['company_id'] = $request->get('company_id');
            $data['leave_type'] = $request->get('leave_type');
            $data['allocated_day'] = $request->get('allocated_day');

            LeaveType::create($data);

            return response()->json(['success' => __('Data Added successfully.')]);
      
    }

    public function editLeaveType(Request $request){

        $data['result']=LeaveType::find($request->id);

        return response()->json($data);
    } 

    public function updateLeaveType(Request $request){

        $result=LeaveType::where('id',$request->hidden_id)
                        ->update([
                            'company_id'=>$request->company_id,
                            'leave_type'=>$request->leave_type,
                            'allocated_day'=>$request->allocated_day,
                        ]);
        return response()->json(['success' => 'Data Updated successfully.']);
                    }
    
    public function deleteLeaveType(Request $request){
        $result=LeaveType::find($request->id)->delete();

        return response()->json(['success' => __('Data is successfully deleted')]);

    }
}
