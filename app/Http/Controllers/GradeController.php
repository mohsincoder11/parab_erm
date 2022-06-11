<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Grade;
use App\Designation;
use App\gradeDesignations;

class GradeController extends Controller
{
    public function grade(){

       
        $companies=Company::all();
        $grades=Grade::join('companies','companies.id','=','grades.company_id')
        ->select('companies.company_name','grades.*')->get();
        
        return view('masters.company_masters.grade',compact('companies','grades'));
       
    }
    public function getDesignations(Request $request)
    {
        $designations=Designation::where('company_id',$request->company_id)->get();
        return response()->json(['designations' => $designations]);
    }

    public function store(Request $request){
    $result=Grade::create([
        'company_id'=>$request->company_id,
        'grade_name'=>$request->grade_name,
        'grade_description'=>$request->grade_description,
    ]);

    $id=$result->id;
    for($i=0;$i<count($request->designations);$i++)
    {
        $result=gradeDesignations::create([
                'grade_id'=>$id,
                'designation_id'=>$request->designations[$i],
            ]);
    }


    return response()->json(['success' => 'Data Added successfully.']);
}

    public function edit(Request $request){

        $data['result']=Grade::find($request->id);
        $data['all_designations']=Designation::where('company_id',$data['result']->company_id)->get();
        $data['selected_designation']=gradeDesignations::where('grade_id',$data['result']->id)->get();
       
        return response()->json($data);
    } 

    public function update(Request $request){

        $result=Grade::where('id',$request->hidden_id)
                        ->update([
                            'company_id'=>$request->company_id,
                            'grade_name'=>$request->grade_name,
                            'grade_description'=>$request->grade_description,
                        ]);

        $removedesignation=gradeDesignations::where('grade_id',$request->hidden_id)->delete();

for($i=0;$i<count($request->designations);$i++)
    {
        $result=gradeDesignations::create([
                'grade_id'=>$request->hidden_id,
                'designation_id'=>$request->designations[$i],
            ]);
    }

        return response()->json(['success' => 'Data Updated successfully.']);
                    }
    
    public function delete(Request $request){
        $result=Grade::find($request->id)->delete();

        return response()->json(['success' => __('Data is successfully deleted')]);

    }

}
