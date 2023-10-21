<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deduction;
use App\Company;

class DeductionController extends Controller
{
    public function deduction(){        
            $companies=Company::all();
            $deductions=Deduction::leftjoin('companies','companies.id','deductions.company_id')->select('deductions.*','companies.company_name')->get();
            return view('masters.salary_masters.deduction',compact('deductions','companies'));           
        
    }

    public function store(Request $request){
        $result=Deduction::create([
            'company_id'=>$request->company_id,
            'deduction_title'=>$request->title,
            'type'=>$request->type,
            'percent'=>$request->percent,
            'apply_to'=>$request->apply_to
        ]);
     
        if(isset($result->id)){
            return response()->json(['success'=>'Record Added Successfully !']);
        }else{
            return response()->json(['errors'=>'Something wents Wrong !']);
        }

        }

        public function edit(Request $request){
            $result=Deduction::find($request->id);

            return response()->json($result);
        }

        public function update(Request $request){
            $result=Deduction::where('id',$request->hidden_id)->update([
                'company_id'=>$request->company_id,
                'deduction_title'=>$request->title,
                'type'=>$request->type,
                'percent'=>$request->percent,
                'apply_to'=>$request->apply_to
            ]);
         
            if(isset($result)){
                return response()->json(['success'=>'Record Updated Successfully !']);
            }else{
                return response()->json(['errors'=>'Something wents Wrong !']);
            }
    
        }

        public function delete(Request $request){
            $result=Deduction::find($request->id)->delete();
            if(isset($result)){
                return response()->json(['success'=>'Record Deleted Successfully !']);
            }else{
                return response()->json(['errors'=>'Something wents Wrong !']);
            }

        }
}
