<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Project;
use App\Department;
use App\Designation;

class DesignationController extends Controller
{
    public function designation(){       
        
        $companies=Company::all();
        $designation=Designation::leftJoin('companies','companies.id','=','designations.company_id')
        ->select('companies.company_name','designations.*')->get();
        return view('masters.company_masters.designation',compact('companies','designation'));
        
    }    
  

    public function store(Request $request){
        $data = [];
        $data['designation'] = $request->designation;
        $data ['company_id'] = $request->company_id;
       
     
        $insert=Designation::create($data);
        return response()->json(['success' => 'Data Added successfully.']);
        
    }

    public function edit(Request $request){
        $designation=Designation::find($request->id);
       
        return response()->json($designation);

    }

    public function update(Request $request){
        $data = [];
        $data['designation'] = $request->designation;
        $data ['company_id'] = $request->company_id;
       
     
        Designation::whereId($request->hidden_id)->update($data);

        return response()->json(['success' => 'Data Updated successfully.']);
        
    }
    
    public function delete(Request $request){
        Designation::whereId($request->id)->delete();
        return response()->json(['success' => __('Data is successfully deleted')]);
    }

    
}
