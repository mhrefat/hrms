<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Department;
use \App\Designationt;

class DepartmentController extends Controller
{
    public function index()
    {
        $dep=Department::paginate(5);
    

        return view('Department.index',compact('dep'));
    
    }

    public function create()
    {
        return view('Department.create');
    }

    public function store(Request $request)
    {

        $request->validate([

              'dep_name'=>'required',
              'dep_head'=>'required',

        ]);
        $dep = new Department([


'dep_name'=> $request->get('dep_name'),
'dep_head'=> $request->get('dep_head'),



        ]);
        $dep->save();

    return redirect(route('department.index'))->with('success','Department is Saved Successfully!');
}
 public function show($id)
    {
        $dep=Department::findOrFail($id);
        return view('Department.show', compact('dep'));
    }

    public function edit($id)
    {
        $dep= Department::find($id);

        return view('Department.edit', compact('dep'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([

'dep_name'=>'required',
'dep_head'=>'required',
'desig'=>'required',



     ]);
        $dep=Department::findOrFail($id);
        $dep->dep_name=$request->get('dep_name');
        $dep->dep_head=$request->get('dep_head');
        $dep->edesig=$request->get('desig');
        
        $dep->save();

return redirect()->route('department.index')->with('success','Department is Updated Successfully!');

        
    }

    public function destroy($id)
    {
        $dep=Department::find($id);
        $dep->delete();
        return redirect()->route('department.index')->with('success','Data Deleted Successfully!');
    }
}
