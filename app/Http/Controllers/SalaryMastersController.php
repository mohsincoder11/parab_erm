<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Allowances;
use App\Models\bank_master\SalaryBankModel;

class SalaryMastersController extends Controller
{
    public function allowances()
    {
        $companies = Company::all();
        $allowances = Allowances::leftjoin('companies', 'companies.id', 'allowances.company_id')->select('allowances.*', 'companies.company_name')->get();
        return view('masters.salary_masters.allowances', compact('companies', 'allowances'));
    }

    public function storeallowances(Request $request)
    {
        $result = Allowances::create([
            'company_id' => $request->company_id,
            'title' => $request->title,
            'type' => $request->type,
            'percent' => $request->percent,
            'apply_to' => $request->apply_to
        ]);

        if (isset($result->id)) {
            return response()->json(['success' => 'Record Added Successfully !']);
        } else {
            return response()->json(['errors' => 'Something wents Wrong !']);
        }
    }


    public function edit(Request $request)
    {
        $result = Allowances::find($request->id);

        return response()->json($result);
    }

    public function update(Request $request)
    {
        $result = Allowances::whereId($request->hidden_id)->update([
            'company_id' => $request->company_id,
            'title' => $request->title,
            'type' => $request->type,
            'percent' => $request->percent,
            'apply_to' => $request->apply_to
        ]);

        if (isset($result)) {
            return response()->json(['success' => 'Record Updated Successfully !']);
        } else {
            return response()->json(['errors' => 'Something wents Wrong !']);
        }
    }

    public function delete(Request $request)
    {
        $result = Allowances::find($request->id)->delete();
        if (isset($result)) {
            return response()->json(['success' => 'Record Deleted Successfully !']);
        } else {
            return response()->json(['errors' => 'Something wents Wrong !']);
        }
    }

    function get_allowance_by_company(Request $request){
        $allowances = Allowances::where('company_id', $request->company_id)->get();
        $fields='';
        foreach ($allowances as $allowance){
            $Percent='';
            if($allowance->type=='Percent'){
                $Percent='readonly parcentage="'.$allowance->percent.'"';
            }
            $fields.='
            <div class="col-md-6 form-group apeended_element">
                                            <label>Allowance-'.$allowance->title.'</label>
                                            <input type="hidden" name="fields[]" value="'.$allowance->title.'">
                                            <input type="number" name="fields_value[]" allowance_type="'.$allowance->type.'" '.$Percent.' step="0.1"
                                                class="form-control gross_salary_cal_field" value="0" placeholder="0">
                                        </div>';
        }
        $bank_name=SalaryBankModel::
        join('banks','banks.id','=','salary_bank.bank_id')
        ->select('salary_bank.*','banks.bank_name')
        ->where('company_id', $request->company_id)->get();
        return response()->json(['fields'=>$fields,'bank_name'=>$bank_name]);
    }
    
}
