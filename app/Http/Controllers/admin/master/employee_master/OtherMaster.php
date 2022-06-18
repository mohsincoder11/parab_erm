<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\other_master\ArrangementMethodModel;
use App\Models\employee_master\other_master\JobCategoryModel;
use App\Models\employee_master\other_master\PaymentTypeModel;
use App\Models\employee_master\other_master\qualification\EducationLevelModel;
use App\Models\employee_master\other_master\qualification\LanguageSkillModel;
use App\Models\employee_master\other_master\qualification\SkillModel;

class OtherMaster extends Controller
{
    public function other_master()
    {
        $arrangement_method = ArrangementMethodModel::orderby('id', 'desc')->get();
        $payment_type = PaymentTypeModel::orderby('id', 'desc')->get();
        $job_category = JobCategoryModel::orderby('id', 'desc')->get();
        $education_level = EducationLevelModel::orderby('id', 'desc')->get();
        $language_skill = LanguageSkillModel::orderby('id', 'desc')->get();
        $skill = SkillModel::orderby('id', 'desc')->get();
        return view('masters.employee_masters.othermaster', compact('arrangement_method', 'payment_type','job_category','education_level','language_skill','skill'));
    }

    //arrangement_method
    public function store_arrangement_method_type(Request $request)
    {
        ArrangementMethodModel::create([
            'arrangement_method' => $request->arrangement_method,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function edit_arrangement_method_type(Request $request)
    {
        $arrangement_method = ArrangementMethodModel::find($request->id);
        return response()->json($arrangement_method);
    }

    public function update_arrangement_method_type(Request $request)
    {
        ArrangementMethodModel::where('id', $request->id)->update([
            'arrangement_method' => $request->arrangement_method,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function delete_arrangement_method_type(Request $request)
    {
        $arrangement_method = ArrangementMethodModel::where('id', $request->id)->delete();
        return response()->json(1);
    }


    //paymentt_method
    public function store_payment_type(Request $request)
    {
        PaymentTypeModel::create([
            'payment_method' => $request->payment_method,
            'payment_percenatage' => $request->payment_percenatage,
            'account_no' => $request->account_no,
        ]);
        return back()->with('success', 'Record added successfully.');
    }

    public function edit_payment_type(Request $request)
    {
        $payment = PaymentTypeModel::find($request->id);
        return response()->json($payment);
    }

    public function update_payment_type(Request $request)
    {
        PaymentTypeModel::where('id', $request->id)->update([
            'payment_method' => $request->payment_method,
            'payment_percenatage' => $request->payment_percenatage,
            'account_no' => $request->account_no,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }

    public function delete_payment_type(Request $request)
    {
        $payment = PaymentTypeModel::where('id', $request->id)->delete();
        return response()->json(1);
    }



     //job category
     public function store_job_category(Request $request)
     {
         JobCategoryModel::create([
             'job_category' => $request->job_category,
            
         ]);
         return back()->with('success', 'Record added successfully.');
     }
 
     public function edit_job_category(Request $request)
     {
         $payment = JobCategoryModel::find($request->id);
         return response()->json($payment);
     }
 
     public function update_job_category(Request $request)
     {
         JobCategoryModel::where('id', $request->id)->update([
            'job_category' => $request->job_category,
            
         ]);
         return back()->with('success', 'Record updated successfully.');
     }
 
     public function delete_job_category(Request $request)
     {
         $payment = JobCategoryModel::where('id', $request->id)->delete();
         return response()->json(1);
     }

     //education level
     public function store_education_level(Request $request)
     {
         EducationLevelModel::create([
             'education_level' => $request->education_level,
            
         ]);
         return back()->with('success', 'Record added successfully.');
     }
 
     public function edit_education_level(Request $request)
     {
         $payment = EducationLevelModel::find($request->id);
         return response()->json($payment);
     }
 
     public function update_education_level(Request $request)
     {
         EducationLevelModel::where('id', $request->id)->update([
            'education_level' => $request->education_level,
            
         ]);
         return back()->with('success', 'Record updated successfully.');
     }
 
     public function delete_education_level(Request $request)
     {
         $payment = EducationLevelModel::where('id', $request->id)->delete();
         return response()->json(1);
     }

      //language skill
      public function store_language_skill(Request $request)
      {
          LanguageSkillModel::create([
              'language_skill' => $request->language_skill,
             
          ]);
          return back()->with('success', 'Record added successfully.');
      }
  
      public function edit_language_skill(Request $request)
      {
          $payment = LanguageSkillModel::find($request->id);
          return response()->json($payment);
      }
  
      public function update_language_skill(Request $request)
      {
          LanguageSkillModel::where('id', $request->id)->update([
             'language_skill' => $request->language_skill,
             
          ]);
          return back()->with('success', 'Record updated successfully.');
      }
  
      public function delete_language_skill(Request $request)
      {
          $payment = LanguageSkillModel::where('id', $request->id)->delete();
          return response()->json(1);
      }

       // skills
       public function store_skills(Request $request)
       {
           SkillModel::create([
               'skills' => $request->skills,
              
           ]);
           return back()->with('success', 'Record added successfully.');
       }
   
       public function edit_skills(Request $request)
       {
           $payment = SkillModel::find($request->id);
           return response()->json($payment);
       }
   
       public function update_skills(Request $request)
       {
           SkillModel::where('id', $request->id)->update([
              'skills' => $request->skills,
              
           ]);
           return back()->with('success', 'Record updated successfully.');
       }
   
       public function delete_skills(Request $request)
       {
           $payment = SkillModel::where('id', $request->id)->delete();
           return response()->json(1);
       }
}
