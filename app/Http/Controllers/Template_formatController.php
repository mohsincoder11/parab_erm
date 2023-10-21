<?php

namespace App\Http\Controllers;

use App\TemplateFormat;
use Illuminate\Http\Request;

class Template_formatController extends Controller
{
    public function index()
    {
        $template_format = TemplateFormat::all();
        return view('masters.template_format',compact('template_format'));
    }

    public function create(Request $request)
    {
    //     $request->validate([
    //         'image' => 'required'
    //    ]);

        // $filename = "";
        // if ($request->hasFile('template_file')) {
        //     $file = $request->file('template_file');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('/images'), $filename);
        // }

        // $insert = TemplateFormat::create([

        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'template_file' => $filename
            
        // ]);
    //    dd($insert);

        // return redirect()->back();
    }

    // public function delete(Request $request)
    // {
    //     dd($request->id);
    //     TemplateFormat :: where('template_id',$request->id)->delete();
    //     return redirect()->back();
    // }

    public function edit(Request $request)
    {
        //$template_id=$id;
        $template_edits = TemplateFormat::where('template_id',$request->id)->first();
        $template = TemplateFormat::orderby('template_id', 'desc')
        ->get();

        return view('masters.edit_template_master', ['template_edits' => $template_edits , 'template_format' => $template]);
    }

    public function update(Request $request)
    {
        $template=TemplateFormat::find($request->id);
      
        if ($request->hasFile('template_file')) {
            $file = $request->file('template_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/images'), $filename);
            $template->template_file=$filename;
        }
    
        $template->title= $request->title;
        $template->category=$request->category;
        $template->save();
        //dd($template);
        return redirect()->route('template_format')->with(['success' => true, 'message' => 'Successfully Updated !']);
    }


    public function delete(Request $request){
        $result=TemplateFormat::where('template_id',$request->id)->delete();
        echo json_encode($result);
        if(isset($result)){
           return response()->json(['success'=>'Record Deleted Successfully !']);
        }else{
           return response()->json(['errors'=>'Something Wents Wrong !']);
        }
       
        
     }
}
