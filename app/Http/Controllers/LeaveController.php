<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use App\Employee;
use Carbon\Carbon;
use DateTime;

class LeaveController extends Controller
{
     public function index()
    {
        if(\auth()->user()->role == 'admin'){
            $leaveee=Leave::where('status','=','Pending')->paginate(5);
        }else{
            $leaveee=Leave::where('emp_id','=',\auth()->user()->emp_id)->paginate(5);
        }


        return view('Leave.index',compact('leaveee'));
    
    }

    public function create()
    {
        $categories=Employee::all();
        return view('Leave.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $var = Leave::where('emp_id' , auth()->user()->emp_id)->where('status', 'Approved')->get();
        $day = 0;
    
        foreach($var as $d){
         
            $day = $d->diff_in_days + $day;
        }


        $fdate = $request->get('from');
$tdate = $request->get('to');
$datetime1 = new DateTime($fdate);
$datetime2 = new DateTime($tdate);
$interval = $datetime1->diff($datetime2);
$days = $interval->format('%a');

    
        if($day<20){
            $request->validate([
                'emp_id'=>'required',
                'name'=>'required',
                'from'=>'required',
                'to'=>'required',
                'reason'=>'required',
                'mobile'=>'required',
                'status'=>'required'
                
                
                        ]);
                 
                    $leaveee = new Leave([
                
                'emp_id'=> $request->get('emp_id'),
                'name'=> $request->get('name'),
                'reason'=> $request->get('reason'),
                'mobile'=> $request->get('mobile'),
                'status'=> $request->get('status'),
                'from'=> Carbon::parse($request->get('from')),
                'to'=> Carbon::parse($request->get('to')),
                'diff_in_days' => $days,

                        ]);
                  $leaveee->save();
                
                    return redirect()->route('leave.index')->with('success','Leave Save Successfully!');
        }else{
            return redirect()->route('leave.index')->with('warning', 'Your 20 days leave has already exceeded');
        }    
        

       



}
 public function show($id)
    {
        $leaveee=Leave::findOrFail($id);
        return view('Leave.show', compact('leaveee'));
    }

    public function edit($id)
    {
        $leaveee= Leave::find($id);

        return view('Leave.edit', compact('leaveee'));
        
    }


public function update(Request $request, $id)
    {
     $request->validate([
'emp_id'=>'required',
'name'=>'required',
'from'=>'required',
'to'=>'required',
'reason'=>'required',
'mobile'=>'required',
'status'=>'required'

        ]);
        $leaveee=Leave::findOrFail($id);
        $leaveee->emp_id=$request->get('emp_id');
        $leaveee->name=$request->get('name');
        $leaveee->from=$request->get('from');
        $leaveee->to=$request->get('to');
        $leaveee->reason=$request->get('reason');
        $leaveee->mobile=$request->get('mobile');
        $leaveee->status=$request->get('status');
        $leaveee->save();


return redirect()->route('leave.index')->with('success','Leave is Update Successfully!');

        
    }

    public function destroy($id)
    {
        $leaveee=Leave::find($id);
        $leaveee->delete();
        return redirect()->route('leave.index')->with('success','Data Delete Successfully!');
    }


}
