<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index()
    {
        $Jobe=Job::paginate(5);
    

        return view('Job.index',compact('Jobe'));
    
    }

    public function create()
    {
        return view('Job.create');
    }

    public function store(Request $request)
    {

        $request->validate([
'title'=>'required',
'type'=>'required',
'desig'=>'required',
'descrip'=>'required',
'position'=>'required',
'exp'=>'required',
'gender'=>'required',
'close'=>'required',
'salary'=>'required',
'status'=>'required'


        ]);
        $Jobe = new Job([

'title'=> $request->get('title'),
'type'=> $request->get('type'),
'desig'=> $request->get('desig'),
'descrip'=> $request->get('descrip'),
'position'=> $request->get('position'),

'exp'=> $request->get('exp'),
'gender'=> $request->get('gender'),
'close'=> $request->get('close'),
'salary'=> $request->get('salary'),



'status'=> $request->get('status')


        ]);
        $Jobe->save();

    return redirect()->route('job.index')->with('success','Job Save Successfully!');
}
 public function show($id)
    {
        $Jobe=Job::findOrFail($id);
        return view('Job.show', compact('Jobe'));
    }

 public function display()
    {
        $Jobe=Job::paginate(5);
        return view('Job.display', compact('Jobe'));
    }

    public function edit($id)
    {
        $Jobe= Job::find($id);

        return view('Job.edit', compact('Jobe'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'title'=>'required',
'type'=>'required',
'desig'=>'required',
'descrip'=>'required',
'position'=>'required',
'exp'=>'required',
'gender'=>'required',
'close'=>'required',
'salary'=>'required',
'status'=>'required'


        ]);
        $Jobe=Job::findOrFail($id);
        $Jobe->title=$request->get('title');
        $Jobe->type=$request->get('type');
        $Jobe->desig=$request->get('desig');
        $Jobe->descrip=$request->get('descrip');
        $Jobe->position=$request->get('position');
        $Jobe->exp=$request->get('exp');
        $Jobe->gender=$request->get('gender');
        $Jobe->close=$request->get('close');
        $Jobe->salary=$request->get('salary');
        $Jobe->status=$request->get('status');
        $Jobe->save();


return redirect()->route('job.index')->with('success','Job is Update Successfully!');

    }

    public function destroy($id)
    {
        $Jobe=Job::find($id);
        $Jobe->delete();


        return redirect()->route('job.index')->with('success','Data Delete Successfully!');
    }
}
