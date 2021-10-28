<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    public function index()
    {
        $noticee=Notice::paginate(5);
    

        return view('Notice.index',compact('noticee'));
    
    }


    public function create()
    {
        return view('Notice.create');
    }

    public function store(Request $request)
    {

        $request->validate([
'title'=>'required',
'department'=>'required',
'description'=>'required',
'date'=>'required'


        ]);
        $noticee = new Notice([

'title'=> $request->get('title'),
'department'=> $request->get('department'),
'description'=> $request->get('description'),


'date'=> $request->get('date')


        ]);
        $noticee->save();

    return redirect()->route('notice.index')->with('success','Notice Save Successfully!');
}
 public function show($id)
    {
        $noticee=Notice::findOrFail($id);
        return view('Notice.show', compact('noticee'));
    }

    public function edit($id)
    {
        $noticee= Notice::find($id);

        return view('Notice.edit', compact('noticee'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'title'=>'required',
'department'=>'required',
'description'=>'required',
'date'=>'required'


        ]);
        $noticee=Notice::findOrFail($id);
        
        $noticee->title=$request->get('title');
        $noticee->department=$request->get('department');
        $noticee->description=$request->get('description');
        $noticee->date=$request->get('date');
        $noticee->save();


        return redirect()->route('notice.index')->with('success','Notice is Update Successfully!');

    }

    public function destroy($id)
    {
        $noticee=Notice::find($id);
        $noticee->delete();
        return redirect()->route('notice.index')->with('success','Data Delete Successfully!');
    }
}
