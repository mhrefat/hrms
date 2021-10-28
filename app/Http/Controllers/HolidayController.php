<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
	public function index()
    {
        $holida=Holiday::paginate(5);
    

        return view('Holiday.index',compact('holida'));
    
    }

    public function create()
    {
        return view('Holiday.create');
    }

    public function store(Request $request)
    {

        $request->validate([

'name'=>'required',
'start'=>'required',
'end'=>'required',
'status'=>'required'


        ]);
        $holida = new Holiday([


'name'=> $request->get('name'),
'start'=> $request->get('start'),
'end'=> $request->get('end'),


'status'=> $request->get('status')


        ]);
        $holida->save();

    return redirect()->route('holiday.index')->with('success','Holiday Save Successfully!');
}
 public function show($id)
    {
        $holida=Holiday::findOrFail($id);
        return view('Holiday.show', compact('holida'));
    }

    public function edit($id)
    {
        $holida= Holiday::find($id);

        return view('Holiday.edit', compact('holida'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([

'name'=>'required',
'start'=>'required',
'end'=>'required',
'status'=>'required'


        ]);
        $holida=Holiday::findOrFail($id);
        
        $holida->name=$request->get('name');
        $holida->start=$request->get('start');
        $holida->end=$request->get('end');
        $holida->status=$request->get('status');
        $holida->save();
        return redirect()->route('holiday.index')->with('success', 'Holiday is Update Successfully');
    }

    public function destroy($id)
    {
        $holida=Holiday::find($id);
        $holida->delete();
        return redirect()->route('holiday.index')->with('success','Data Delete Successfully!');
    }
    
}
