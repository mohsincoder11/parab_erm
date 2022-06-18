<?php

namespace App\Http\Controllers\admin\master\employee_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_master\master\LeaveTypeModel;
use App\Models\employee_master\master\AwardTypeModel;
use App\Models\employee_master\master\WarningTypeModel;
use App\Models\employee_master\master\TerminationTypeModel;
use App\Models\employee_master\master\ExpenseTypeModel;
use App\Models\employee_master\master\EmployeeStatusModel;
use App\Models\employee_master\master\DocumentTypeModel;

class Master extends Controller
{
    public function master()
    {
        $leave_data=LeaveTypeModel::orderby('id','desc')->get();
        $award_data=AwardTypeModel::orderby('id','desc')->get();
        $warning_data=WarningTypeModel::orderby('id','desc')->get();
        $termination_data=TerminationTypeModel::orderby('id','desc')->get();
        $expense_data=ExpenseTypeModel::orderby('id','desc')->get();
        $employee_status_data=EmployeeStatusModel::orderby('id','desc')->get();
        $document_data=DocumentTypeModel::orderby('id','desc')->get();
        return view('masters.employee_masters.master',compact('leave_data','award_data','warning_data',
        'termination_data','expense_data','employee_status_data','document_data'));
    }


    //Leave
    public function store_leave_type(Request $request)
    {
        LeaveTypeModel::create([
            'leave_name'=>$request->leave_name,
        'day_per_year'=>$request->day_per_year,
        ]);
        return back()->with('success', 'Record added successfully.');
        
    }
   
    public function edit_leave_type(Request $request)
    {
        $leave_data=LeaveTypeModel::find($request->id);
        return response()->json($leave_data);        
    }

    public function update_leave_type(Request $request)
    {
        LeaveTypeModel::where('id',$request->id)->update([
            'leave_name'=>$request->leave_name,
        'day_per_year'=>$request->day_per_year,
        ]);
        return back()->with('success', 'Record updated successfully.'); 
        
    }

    public function delete_leave_type(Request $request)
    {
        $leave_data=LeaveTypeModel::where('id',$request->id)->delete();
        return response()->json(1);
  
        
    }

    //Award
    public function store_award_type(Request $request)
    {
        AwardTypeModel::create([
            'award_name'=>$request->award_name,
        ]);
        return back()->with('success', 'Record added successfully.');        
    }
   
    public function edit_award_type(Request $request)
    {
        $award_data=AwardTypeModel::find($request->id);
        return response()->json($award_data);        
    }

    public function update_award_type(Request $request)
    {
        AwardTypeModel::where('id',$request->id)->update([
            'award_name'=>$request->award_name,
        ]);
        return back()->with('success', 'Record updated successfully.');         
    }

    public function delete_award_type(Request $request)
    {
        $award_data=AwardTypeModel::where('id',$request->id)->delete();
        return response()->json(1);        
    }

    //warning
    public function store_warning_type(Request $request)
    {
        WarningTypeModel::create([
            'warning_name'=>$request->warning_name,
        ]);
        return back()->with('success', 'Record added successfully.');        
    }
   
    public function edit_warning_type(Request $request)
    {
        $warning_data=WarningTypeModel::find($request->id);
        return response()->json($warning_data);        
    }

    public function update_warning_type(Request $request)
    {
        WarningTypeModel::where('id',$request->id)->update([
            'warning_name'=>$request->warning_name,
        ]);
        return back()->with('success', 'Record updated successfully.');         
    }

    public function delete_warning_type(Request $request)
    {
        $warning_data=WarningTypeModel::where('id',$request->id)->delete();
        return response()->json(1);        
    }


     //termination
     public function store_termination_type(Request $request)
     {
         TerminationTypeModel::create([
             'termination_name'=>$request->termination_name,
         ]);
         return back()->with('success', 'Record added successfully.');        
     }
    
     public function edit_termination_type(Request $request)
     {
         $termination_data=TerminationTypeModel::find($request->id);
         return response()->json($termination_data);        
     }
 
     public function update_termination_type(Request $request)
     {
         TerminationTypeModel::where('id',$request->id)->update([
             'termination_name'=>$request->termination_name,
         ]);
         return back()->with('success', 'Record updated successfully.');         
     }
 
     public function delete_termination_type(Request $request)
     {
         $termination_data=TerminationTypeModel::where('id',$request->id)->delete();
         return response()->json(1);        
     }

     
    //expense
    public function store_expense_type(Request $request)
    {
        ExpenseTypeModel::create([
            'expense_name'=>$request->expense_name,
        ]);
        return back()->with('success', 'Record added successfully.');        
    }
   
    public function edit_expense_type(Request $request)
    {
        $expense_data=ExpenseTypeModel::find($request->id);
        return response()->json($expense_data);        
    }

    public function update_expense_type(Request $request)
    {
        ExpenseTypeModel::where('id',$request->id)->update([
            'expense_name'=>$request->expense_name,
        ]);
        return back()->with('success', 'Record updated successfully.');         
    }

    public function delete_expense_type(Request $request)
    {
        $expense_data=ExpenseTypeModel::where('id',$request->id)->delete();
        return response()->json(1);        
    }


    //employee_status
    public function store_employee_status_type(Request $request)
    {
        EmployeeStatusModel::create([
            'employee_status_name'=>$request->employee_status_name,
        ]);
        return back()->with('success', 'Record added successfully.');        
    }
   
    public function edit_employee_status_type(Request $request)
    {
        $employee_status_data=EmployeeStatusModel::find($request->id);
        return response()->json($employee_status_data);        
    }

    public function update_employee_status_type(Request $request)
    {
        EmployeeStatusModel::where('id',$request->id)->update([
            'employee_status_name'=>$request->employee_status_name,
        ]);
        return back()->with('success', 'Record updated successfully.');         
    }

    public function delete_employee_status_type(Request $request)
    {
        $employee_status_data=EmployeeStatusModel::where('id',$request->id)->delete();
        return response()->json(1);        
    }


     //document
     public function store_document_type(Request $request)
     {
         DocumentTypeModel::create([
             'document_name'=>$request->document_name,
         ]);
         return back()->with('success', 'Record added successfully.');        
     }
    
     public function edit_document_type(Request $request)
     {
         $document_data=DocumentTypeModel::find($request->id);
         return response()->json($document_data);        
     }
 
     public function update_document_type(Request $request)
     {
         DocumentTypeModel::where('id',$request->id)->update([
             'document_name'=>$request->document_name,
         ]);
         return back()->with('success', 'Record updated successfully.');         
     }
 
     public function delete_document_type(Request $request)
     {
         $document_data=DocumentTypeModel::where('id',$request->id)->delete();
         return response()->json(1);        
     }
    
}
