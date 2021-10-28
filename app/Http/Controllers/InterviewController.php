<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;

class InterviewController extends Controller
{
    public function index()
    {
        $inter=Interview::paginate(5);
    

        return view('Interview.index',compact('inter'));
    
    }

    public function create()
    {
        return view('Interview.create');
    }

    public function store(Request $request)
    {

        $request->validate([
          'job'=>'required',
          'place'=>'required',
          'date'=>'required',
          'interviewrs'=>'required',
          'image'=>'required|mimes:doc,docx,pdf,txt|max:2048'
        ]);
        $image=$request->file('image');
        $new_name=rand() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'), $new_name);
        $form_data=array(
           
           'job'=> $request->job,
           'place'=>$request->place,
           'date'=>$request->date,
           'interviewrs'=>$request->interviewrs,
           
           
           'image'=>$new_name
           );
        Interview::create($form_data);

    return redirect()->route('interview.index')->with('success','Interview Information Save Successfully!');
}
 public function show($id)
    {
        $inter=Interview::findOrFail($id);
        return view('Interview.show', compact('inter'));
    }

    public function edit($id)
    {
        $inter= Interview::find($id);

        return view('Interview.edit', compact('inter'));
        
    }


public function update(Request $request, $id)
    {
     $image=$request->file('image');
        if ($image!='')
        {
            $request->validate([
          'job'=>'required',
          'place'=>'required',
          'date'=>'required',
          'interviewrs'=>'required',
          'image'=>'required|mimes:doc,docx,pdf,txt|max:2048'
          

            ]);
            $new_name=rand() . '.'. $image->getClientOriginalExtension();
            $image->move(public_path('image'), $new_name);
        }
        else
        {
            $request->validate([
          
          'job'=>'required',
          'place'=>'required',
          'date'=>'required',
          'interviewrs'=>'required',
          'image'=>'required|mimes:doc,docx,pdf,txt|max:2048'
            ]);
        }
           $form_data=array(
           
           'job'=> $request->job,
           'place'=>$request->place,
           'date'=>$request->date,
           'interviewrs'=>$request->interviewrs,
           'image'=>$new_name
           
           
           );
              Interview::whereId($id)->update($form_data);
        return redirect()->route('interview.index')->with('success','Interview Information Update Successfully!');
    }

    public function destroy($id)
    {
        $inter=Interview::find($id);
        $inter->delete();
        return redirect()->route('interview.index')->with('success','Data Delete Successfully!');
    }
}
