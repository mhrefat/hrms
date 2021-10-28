<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
use App\Employee;
use App\Designation;


class SalaryController extends Controller
{
     public function index(Request $request)
    {
       

        if(\auth()->user()->role == 'admin'){
            $salaryy=Salary::paginate(5);
            if($request->query('query')){
                $salaryy=Salary::where('name','LIKE','%'. $request->query("query") .'%')->paginate(5); 
            }
         
        }else{
            $salaryy=Salary::where('emp_id','=',\auth()->user()->emp_id)->paginate(5);
        }
        return view('salary.index',compact('salaryy'));
    
    }

 

    public function create()
    {
       $categories=employee::all();
      
       return view('Salary.create',compact('categories'));
       
        
      
    }
    public function store(Request $request)
    {

 $request->validate([
'emp_id'=>'required',
'name'=>'required',
'desig'=>'required',
'depart'=>'required',
'salary'=>'required',
'allowance'=>'required',
'fund'=>'required',
'bonus'=>'required',
'reduction'=>'required',
'month'=>'required'


        ]);
        $salaryy = new Salary([

'emp_id'=> $request->get('emp_id'),
'name'=> $request->get('name'),
'depart'=> $request->get('depart'),
'desig'=> $request->get('desig'),
'salary'=> $request->get('salary'),
'allowance'=> $request->get('allowance'),
'fund'=> $request->get('salary'),
'bonus'=> $request->get('bonus'),
'reduction'=> $request->get('reduction'),
'month'=> $request->get('month'),
'gross'=> $request->salary + $request->allowance + $request->bonus,

        ]);
        $salaryy->save();

    return redirect()->route('salary.index')->with('success','Salary Save Successfully!');
}
 public function show($id)
    {
        $salaryy=Salary::findOrFail($id);
        
        return view('Salary.show', compact('salaryy'));
    }

    public function edit($id)
    {
        $employ= Employee::find($id);

        return view('Salary.edit', compact('employ'));
        
    }

   

public function update(Request $request, $id)
    {
     $request->validate([
        'emp_id'=>'required',
        'name'=>'required',
        'desig'=>'required',
        'depart'=>'required',
        'salary'=>'required',
        'allowance'=>'required',
        'fund'=>'required',
        'bonus'=>'required',
        'reduction'=>'required',
        'month'=>'required'
        ]);

        
        $salaryy = new Salary([

            'emp_id'=> $request->get('emp_id'),
            'name'=> $request->get('name'),
            'depart'=> $request->get('depart'),
            'desig'=> $request->get('desig'),
            'salary'=> $request->get('salary'),
            'allowance'=> $request->get('allowance'),
            'fund'=> $request->get('fund'),
            'bonus'=> $request->get('bonus'),
            'reduction'=> $request->get('reduction'),
            'month'=> $request->get('month'),
            'gross'=> $request->salary + $request->allowance + $request->bonus,
             ]);
                    
        $salaryy->save();


return redirect()->route('salary.index')->with('success','Salary Updated Successfully!');


        
    }

    public function destroy($id)
    {
        $Salaryy=Salary::find($id);
        $Salaryy->delete();


        return redirect()->route('salary.index')->with('success','Data Delete Successfully!');
    }
}
