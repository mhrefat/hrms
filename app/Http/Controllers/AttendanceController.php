<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Employee;

class AttendanceController extends Controller
{
	public function index(Request $request)
    {
        
        $attend=Attendance::with('employee')->orderBy('updated_at','ASC')->paginate(5);
   
       
        return view('Attendance.index',compact('attend'));
    }




    public function create()
    {
        if(\auth()->user()->role == 'admin'){
            $employees=Employee::all();
        }else{
            $employees=Employee::where('emp_id','=',\auth()->user()->emp_id)->paginate(5);
        }
        

        return view('Attendance.create',compact('employees'));



        
    }

    public function store(Request $request)
    {

        $request->validate([
        'emp_id'=>'required',
        'name'=>'required',
        'date'=>'required',
        'type'=>'required',
        'status'=>'required'


        ]);
        $attend = new Attendance([

            'emp_id'=> $request->get('emp_id'),
            'name'=> $request->get('name'),
            'date'=> $request->get('date'),
            'type'=> $request->get('type'),

            'status'=> $request->get('status')


        ]);
        $attend->save();

    return redirect()->route('attendance.index')->with('success','Attendance Save Successfully!');
}
 public function show($id)
    {
        $attend=Attendance::findOrFail($id);
        return view('Attendance.show', compact('attend'));
    }

    public function edit($id)
    {
        $attend= Attendance::find($id);

        return view('Attendance.edit', compact('attend'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'emp_id'=>'required',
'name'=>'required',
'date'=>'required',
'type'=>'required',
'status'=>'required'

        ]);
        $attend=Attendance::findOrFail($id);
        $attend->emp_id=$request->get('emp_id');
        $attend->name=$request->get('name');
        $attend->date=$request->get('date');
        $attend->type=$request->get('type');
        
        $attend->status=$request->get('status');
        $attend->save();
        return redirect()->route('attendance.index')->with('success', 'Attendance is Update Successfully');
    }

    public function destroy($id)
    {
        $attend=Attendance::find($id);
        $attend->delete();
        return redirect()->route('attendance.index')->with('success','Data Delete Successfully!');
    }



    public function in($id)

    {

        $allredy = Attendance::whereDate('in',now()->format('Y-m-d'))->where('employee_id',$id)->first();


       if($allredy == null)
       {

         $attendance = Attendance::where('in',null)->where('employee_id',$id)->first();


        if($attendance !=null){
            $attendance->update([
            'in'=>now(),
            'is_present'=>1,
            'employee_id'=>$id
            ]);

             return redirect()->back()->with('successIn','Successfully attendance In');
        }

         Attendance::create([
            'in'=>now(),
            'is_present'=>1,
            'employee_id'=>$id
        ]);

         return redirect()->back()->with('successIn','Successfully attendance In');
       } 

       if($allredy->count() != 0)
       {
         return redirect()->back()->with('error','allredy exist');
       }
    }


    public function out($id)
    {
        
         $attend=Attendance::where('employee_id',$id)->orderBy('id','desc')->first();
       
         $attend->update([

            'out'=>now()
         ]);
         return redirect()->back()->with('successOut','Successfully attendance out');
    }

       public function absent($id)
    {
         $attend=Attendance::where('employee_id',$id)->first();


         if($attend != null){
               $attend->update([
            'in'=>null,
            'is_present'=>0,
            'absent_at'=>now()
         ]);

         return redirect()->back()->with('successOut','Successfully attendance absent');

         }

         Attendance::create([
            'employee_id'=>$id,
             'in'=>null,
            'is_present'=>0,
            'absent_at'=>now()
         ]);
         return redirect()->back()->with('successOut','Successfully attendance absent');
      
    }














   
}
