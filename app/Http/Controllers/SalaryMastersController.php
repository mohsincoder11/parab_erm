<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Allowances;

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
}
