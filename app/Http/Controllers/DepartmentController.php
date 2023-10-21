<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Project;
use App\Department;
class DepartmentController extends Controller
{
    public function department()
    {       
            $departments=Department::leftJoin('companies','companies.id','=','departments.company_id')
            ->select('companies.company_name','departments.*')->get();
            $companies=Company::all();
            return view('masters.company_masters.department',compact('companies','departments'));
       
    }
    public function store(Request $request){
        $data = [];
        $data['department'] = $request->department;
        $data['department_head'] = $request->department_head;
        $data ['company_id'] = $request->company_id;
        $data ['project_id'] = $request->project_id;
        
        $company_logo =$request->icon;
       

        if (isset($company_logo))
        {

            if ($company_logo->isValid())
            {
                $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
                $company_logo->move('public/companyimg/', $file_name);
               
                $data['icon'] = $file_name;
            }
        }elseif($company_logo == null){
            $data['icon'] = $request->previous_icon;
        }
        
        
        $insert=Department::create($data);
        return response()->json(['success' => 'Data Added successfully.']);

    }

    public function loadprojects(Request $request){
        $result=Project::where('company_id','=',$request->id)->get();

        return response()->json($result);

    }

   
    public function edit(Request $request){
        $departments=Department::find($request->id);
        $projects=Project::where('company_id','=',$departments->company_id)->get();
        return response()->json(['departments'=>$departments,'projects'=>$projects]);

    }

    public function update(Request $request){
        
        $data = [];
        $data['department'] = $request->department;
       // $data['department_head'] = $request->department_head;
        $data ['company_id'] = $request->company_id;
        //$data ['project_id'] = $request->project_id;
        
        $company_logo =$request->icon;
       
       $file_name="";
        if (isset($company_logo))
        { 

            if ($company_logo->isValid())
            {
                $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
                $company_logo->move('public/companyimg/', $file_name);
               
                //$data['icon'] = $file_name;
            }
        }elseif($company_logo == null){
            //$data['icon'] = $request->previous_icon;
        }
        
        Department::where('id',$request->hidden_id)->update($data);

        return response()->json(['success' => 'Data Updated successfully.']);
    }

    public function delete(Request $request){
        Department::where('id',$request->id)->delete();
        return response()->json(['success' => __('Data is successfully deleted')]);
    }

    public function get_department_by_company(Request $request){
        $departments=Department::where(['company_id' => $request->company_id])
        ->select('id','department')->orderby('department','asc')->get();
        $employee=get_employee_name_and_id($request->company_id);
        return response()->json(['status' =>true,'department'=>$departments,'employee'=>$employee]);
    }
    


}
