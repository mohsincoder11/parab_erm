<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Officeshift;

class OfficeshiftController extends Controller
{
   public function officeshift(){   
      
        $companies=Company::All();
        $officeshifts=Officeshift::join('companies','companies.id','=','officeshifts.company_id')->select('companies.company_name','officeshifts.*')->get();
       return view('masters.hr_masters.office_shift',compact('companies','officeshifts'));
   }

   public function store(Request $request){

     $result=Officeshift::create([
        'company_id'=>$request->company_id,
        'shift_name'=>$request->shift_name,
        'monday_in'=>$request->monday_in,
        'monday_out'=>$request->monday_out,
        'tuesday_in'=>$request->tuesday_in,
        'tuesday_out'=>$request->tuesday_out,
        'wednesday_in'=>$request->wednesday_in,
        'wednesday_out'=>$request->wednesday_out,
        'thursday_in'=>$request->thursday_in,
        'thursday_out'=>$request->thursday_out,
        'friday_in'=>$request->friday_in,
        'friday_out'=>$request->friday_out,
        'saturday_in'=>$request->saturday_in,
        'saturday_out'=>$request->saturday_out,
        'sunday_in'=>$request->sunday_in,
        'sunday_out'=>$request->sunday_out,
        'sunday_week_off'=>$request->sunday_week_off,
        'monday_week_off'=>$request->monday_week_off,
        'tuesday_week_off'=>$request->tuesday_week_off,
        'wednesday_week_off'=>$request->wednesday_week_off,
        'thursday_week_off'=>$request->thursday_week_off,
        'friday_week_off'=>$request->friday_week_off,
        'saturday_week_off'=>$request->saturday_week_off

     ]);
     
      return response()->json(['success' => 'Data Added successfully.']);
      
   }

   public function edit(Request $request){
     $result=Officeshift::find($request->id);
     return response()->json($result); 

   }

   public function update(Request $request){
      $data=[];
      $data['company_id']=$request->company_id;
      $data['shift_name']=$request->shift_name;
      $data['monday_in']=$request->monday_in;
      $data['monday_out']=$request->monday_out;
      $data['tuesday_in']=$request->tuesday_in;
      $data['tuesday_out']=$request->tuesday_out;
      $data['wednesday_in']=$request->wednesday_in;
      $data['wednesday_out']=$request->wednesday_out;
      $data['thursday_in']=$request->thursday_in;
      $data['thursday_out']=$request->thursday_out; 
      $data['friday_in']=$request->friday_in;
      $data['friday_out']=$request->friday_out;
      $data['saturday_in']=$request->saturday_in;
      $data['saturday_out']=$request->saturday_out;
      $data['sunday_in']=$request->sunday_in;
      $data['sunday_out']=$request->sunday_out;
      $data['sunday_week_off']=$request->sunday_week_off;
      $data['monday_week_off']=$request->monday_week_off;
      $data['tuesday_week_off']=$request->tuesday_week_off;
      $data['wednesday_week_off']=$request->wednesday_week_off;
      $data['thursday_week_off']=$request->thursday_week_off;
      $data['friday_week_off']=$request->friday_week_off;
      $data['saturday_week_off']=$request->saturday_week_off;
     
      $result=Officeshift::where('id',$request->hidden_id)->update($data);
     
      return response()->json(['success' => 'Data Updated successfully.']);
   }

   public function delete(Request $request){
      $result=Officeshift::find($request->id)->delete();
      if(isset($result)){
         return response()->json(['success'=>'Record Deleted Successfully !']);
      }else{
         return response()->json(['errors'=>'Something Wents Wrong !']);
      }
     

   }

}
