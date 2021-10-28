<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Promotion;


class PromotionController extends Controller
{
	 public function index()
    {
        $promo=Promotion::paginate(5);
    

        return view('Promotion.index',compact('promo'));
    
    }


    public function create()
    {
       $categories=Employee::all();

       return view('Promotion.create',compact('categories'));
    }

    public function store(Request $request)
    {

 $request->validate([
'name'=>'required',
'emp_id'=>'required',
'ename'=>'required',
'month'=>'required'


        ]);
        $promo = new Promotion([

'name'=> $request->get('name'),
'emp_id'=> $request->get('emp_id'),
'ename'=> $request->get('ename'),
'month'=> $request->get('month'),



        ]);
        $promo->save();

    return redirect()->route('promotion.index')->with('success','Promotion Save Successfully!');
}
 public function show($id)
    {
        $promo=Promotion::findOrFail($id);
        return view('Promotion.show', compact('promo'));
    }

    public function edit($id)
    {
        $promo= Promotion::find($id);

        return view('Promotion.edit', compact('promo'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'name'=>'required',
'emp_id'=>'required',
'ename'=>'required',
'month'=>'required'


        ]);
        $promo=Promotion::findOrFail($id);
        $promo->name=$request->get('name');
        $promo->emp_id=$request->get('emp_id');
        $promo->ename=$request->get('ename');
        $promo->month=$request->get('month');
        $promo->save();

        return redirect()->route('promotion.index')->with('success','Promotion is Update Successfully!');

    }

    public function destroy($id)
    {
        $promo=Promotion::find($id);
        $promo->delete();
        return redirect()->route('promotion.index')->with('success','Data Delete Successfully!');
    }
    
}
