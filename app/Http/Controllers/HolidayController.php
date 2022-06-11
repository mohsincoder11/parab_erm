<?php

namespace App\Http\Controllers;

use App\Holiday;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function Holiday()
    {
       
            $companies=Company::all();
            $holidays=Holiday::join('companies','companies.id','=','holidays.company_id')
                                    ->select('companies.company_name','holidays.*')
                                    ->get();
            return view('masters.hr_masters.holiday',compact('companies','holidays'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeHoliday(Request $request)
    {
        
            $validator = Validator::make($request->only('company_id','event_name','start_date','end_date'),
                [
                    'company_id' => 'required',
                    'event_name' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                ]
            );


            if ($validator->fails())
            {
                return response()->json(['errors' => $validator->errors()->all()]);
            }

            $data = [];

            $data['company_id'] = $request->get('company_id');
            $data['event_name'] = $request->get('event_name');
            $data['start_date'] = $request->get('start_date');
            $data['end_date'] = $request->get('end_date');

            Holiday::create($data);

            return response()->json(['success' => __('Data Added successfully.')]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function editHoliday(Request $request){

        $data['result']=Holiday::find($request->id);

        return response()->json($data);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function updateHoliday(Request $request)
    {

        $result=Holiday::where('id',$request->hidden_id)
                        ->update([
                            'company_id'=>$request->company_id,
                            'event_name'=>$request->event_name,
                            'start_date'=>$request->start_date,
                            'end_date'=>$request->end_date,
                        ]);
        return response()->json(['success' => 'Data Updated successfully.']);
    }

    
    public function deleteHoliday(Request $request){
        $result=Holiday::find($request->id)->delete();

        return response()->json(['success' => __('Data is successfully deleted')]);

    }
}
