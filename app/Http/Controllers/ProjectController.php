<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Company;

class ProjectController extends Controller
{
    public function projects(){
        
      
        $projects=Project::leftJoin('companies','companies.id','=','projects.company_id')
        ->select('companies.company_name','projects.*')->get();
        $compannies=Company::all();
       
        return view('masters.company_masters.project',compact('projects','compannies'));
       
    }

    public function store(Request $request){
        $data = [];
        $data['project'] = $request->project;
      
        $data ['company_id'] = $request->company_id;

        // $company_logo =$request->icon;
       

        // if (isset($company_logo))
        // {

        //     if ($company_logo->isValid())
        //     {
        //         $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
        //         $company_logo->move('public/companyimg/', $file_name);
               
        //         $data['icon'] = $file_name;
        //     }
        // } 
        
        $insert=Project::create($data);
        return response()->json(['success' => 'Data Added successfully.']);

    }
    public function edit(Request $request ){
        $result=Project::find($request->id);
        return response()->json($result);
    }

    public function update(Request $request){
        $data = [];
        $data['project'] = $request->project;
       
        $data ['company_id'] = $request->company_id;

        $company_logo =$request->icon;
       

        // if (isset($company_logo))
        // {

        //     if ($company_logo->isValid())
        //     {
        //         $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
        //         $company_logo->move('public/companyimg/', $file_name);
               
        //         $data['icon'] = $file_name;
        //     }
        // }elseif($company_logo == null){
        //     $data['icon'] = $request->previous_icon;
        // }
        
       
      
       $result= Project::where('id',$request->hidden_id)->update($data);
    
        return response()->json(['success' => 'Data Updated successfully.']);
    }

    
public function delete(Request $request){
    Project::where('id',$request->id)->delete();
    return response()->json(['success' => __('Data is successfully deleted')]);
}



}
