<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Companydocs;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
  

    public function companies(){        
       
        $companyArr=Company::all();      
        return view('organization.companies',compact('companyArr'));

    }

    public function storecompany(Request $request){    
        
        $validator = Validator::make($request->only('sector_type', 'company_type','company_name', 'trading_name', 'email', 'company_logo'
           ),
            [
                'sector_type'=> 'required',
                'company_name' => 'required|unique:companies,company_name,',
                'company_type' => 'required',
                'email' => 'required',
                'company_logo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif'
            ],
            [ 'company_name.unique'=>'Company Name is Already Taken','company_logo.mimes'=>'Select jpeg, png, jpg, gif Image'],
       
        );


        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        
        $data = [];
        $data['sector_type'] = $request->sector_type;
        $data['company_type'] = $request->company_type;
        $data['company_name'] = $request->company_name;
        $data ['trading_name'] = $request->trading_name;
        $data ['email'] = $request->email;
        $data ['contact_no'] = $request->contact_no;
        $data ['registered_address'] = $request->registered_address;
        $data ['city'] = $request->city;
        $data ['state'] = $request->state;
        $data ['zip_code'] = $request->zip_code;
        $data ['contact_person_name'] = $request->contact_person_name;
        $data ['person_mobile'] = $request->person_mobile;
        $data ['website'] = $request->website;
        $company_logo = $request->company_logo;
       
        if (isset($company_logo))
        {

            if ($company_logo->isValid())
            {
                $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
                $company_logo->move('public/companyimg/', $file_name);
                $data['company_logo'] = $file_name;
            }
        } 
      
        $insert=Company::create($data);
    
        $doc=$request->document;
        $name=$request->document_type;

        if($doc!=null || $name!=null){
            for($i=0;$i<count($doc);$i++){
                if (isset($doc[$i]))
                {
                    if ($doc[$i]->isValid())
                    {
                        $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' .$doc[$i]->getClientOriginalExtension();
                        $doc[$i]->move('public/companydocs/', $file_name);
                    }
                } 
                $result=Companydocs::create([
                    'company_id'=>$insert->id,
                    'document_name'=>$name[$i],
                    'document'=>$file_name
                ]);
            }
        }
       
        return response()->json(['success' => 'Data Added successfully.']);

}

        public function edit(Request $request){
            $result=Company::find($request->id);

            return response()->json($result);

        }

        public function view(Request $request){
            $result=Company::find($request->id);
            $docs=Companydocs::where('company_id','=',$request->id)->get();
            return response()->json(['company'=>$result,'docs'=>$docs]);

        }

            
    public function updatecompany(Request $request){
      
         
        $validator = Validator::make($request->only('sector_type1', 'company_type1','company_name1', 'trading_name1', 'email1', 'company_logo1'
           ),
            [
                'sector_type1'=> 'required',
                'company_name1' => 'required',
                'company_type1' => 'required',
                'email1' => 'required',
                'company_logo1' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif'
            ],
            [ 'company_logo1.mimes'=>'Select jpeg, png, jpg, gif Image'],
       
        );


        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }


        $data = [];

        $data = [];
        $data['sector_type'] = $request->sector_type1;
        $data['company_type'] = $request->company_type1;
        $data['company_name'] = $request->company_name1;
        $data ['trading_name'] = $request->trading_name1;
        $data ['email'] = $request->email1;
        $data ['contact_no'] = $request->contact_no1;
        $data ['registered_address'] = $request->registered_address1;
        $data ['city'] = $request->city1;
        $data ['state'] = $request->state1;
        $data ['zip_code'] = $request->zip_code1;
        $data ['contact_person_name'] = $request->contact_person_name1;
        $data ['person_mobile'] = $request->person_mobile1;
        $data ['website'] = $request->website1;
        
        $company_logo = $request->company_logo1;

        if (isset($company_logo))
        {

            if ($company_logo->isValid())
            {
                $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' . $company_logo->getClientOriginalExtension();
                $company_logo->move('public/companyimg/', $file_name);
                $data['company_logo'] = $file_name;
            }
        }

        Company::whereId($request->hidden_id)->update($data);

        $doc=$request->document;
        $name=$request->document_type;

        if($doc!=null || $name!=null){
            for($i=0;$i<count($doc);$i++){
                if (isset($doc[$i]))
                {
                    if ($doc[$i]->isValid())
                    {
                        $file_name = preg_replace('/\s+/', '', rand()) . '_' . time() . '.' .$doc[$i]->getClientOriginalExtension();
                        $doc[$i]->move('public/companydocs/', $file_name);
                    }
                } 
                $result=Companydocs::create([
                    'company_id'=>$request->hidden_id,
                    'document_name'=>$name[$i],
                    'document'=>$file_name
                ]);
            }
        }

        return response()->json(['success' => 'Data Updated successfully.']);

}

public function delete(Request $request){
    Company::whereId($request->id)->delete();
    return response()->json(['success' => __('Data is successfully deleted')]);
}

public function bulkdelete(Request $request){

    $bulk=explode(',',$request->arr);
    foreach($bulk as $data){
        Company::whereId($data)->delete();
    }
   
    return response()->json(['success' => __('Data is successfully deleted')]);
}

}
