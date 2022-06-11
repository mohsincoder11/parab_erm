<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Validator;
use App\Location;

class LocationController extends Controller
{
    public function location(){             
        $companies=Company::all();
        $locationArr=Location::leftJoin('companies','companies.id','=','locations.company_id')
                                ->select('companies.company_name','locations.*')->get();
        return view('masters.company_masters.location',compact('locationArr','companies'));
    }

    public function get_location_by_company(Request $request){
        $location=Location::select('id','location_name')
        ->where('company_id',$request->company_id)
        ->orderby('location_name','asc')->get();
        return response()->json($location);
    }

    public function storelocation(Request $request){
        
        $data = [];
        $data['company_id'] = $request->company_id;
        $data['location_name'] = $request->location_name;
      
        $data ['address1'] = $request->address1;
        $data ['city'] = $request->city;
        $data ['state'] = $request->state;

        $insert=Location::create($data);
        return response()->json(['success' => 'Data Added successfully.']);
    }

    public function edit(Request $request ){
        $result=Location::find($request->id);
        return response()->json($result);
    }

    public function update(Request $request){
        
        $data = [];
        $data ['company_id'] = $request->company_id1;
        $data['location_name'] = $request->location_name1;
        $data ['address1'] = $request->address11;
        $data ['city'] = $request->city1;
        $data ['state'] = $request->state1;
        Location::whereId($request->hidden_id)->update($data);

        return response()->json(['success' => 'Data Updated successfully.']);
    }

    public function delete(Request $request){
        Location::whereId($request->id)->delete();
        return response()->json(['success' => __('Data is successfully deleted')]);
    }

}
