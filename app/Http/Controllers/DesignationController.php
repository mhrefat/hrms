<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;
use App\Department;

class DesignationController extends Controller
{
    public function index()
    {
        $dep=Designation::paginate(5);
    

        return view('Designation.index',compact('dep'));
    
    }

    public function create()
    {
        $categories=Department::all();
        return view('Designation.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([

           'dep_name'=>'required',
           'desig'=>'required',
           'description'=>'required',
           'status'=>'required',



        ]);
        $dep = new Designation([


               'dep_name'=> $request->get('dep_name'),
               'desig'=> $request->get('desig'),
               'status'=> $request->get('status'),
               'description'=> $request->get('description'),



        ]);
        $dep->save();

    return redirect()->route('designation.index')->with('success','Designation Save Successfully!');
}
 public function show($id)
    {
        $dep=Designation::findOrFail($id);
        return view('Designation.show', compact('dep'));
    }

    public function edit($id)
    {
        $dep= Designation::find($id);

        return view('Designation.edit', compact('dep'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'dep_name'=>'required',
'desig'=>'required|max:2000',
'status'=>'required',
'description'=>'required',


        ]);
        $dep=Designation::findOrFail($id);
      
        $dep->dep_name=$request->get('dep_name');
        $dep->desig=$request->get('desig');
        $dep->status=$request->get('status');
        $dep->description=$request->get('description');
       
        $dep->save();


return redirect()->route('designation.index')->with('success','Designation is Update Successfully!');

        
    }

    public function destroy($id)
    {
        $dep=Designation::find($id);
        $dep->delete();
        return redirect()->route('designation.index')->with('success','Data Delete Successfully!');
    }
}
