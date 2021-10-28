<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Notice;
use App\Attendance;
use App\Leave;

class UserController extends Controller
{
	public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {

        //step 1 check input
        $credentials=$request->except('_token');

        //step 2 check valid user
        if (Auth::attempt($credentials)) {

            //step2.1 if valid login to the system
            // Authentication passed...
                return redirect()->route('index');

        }else
        {
            //step2.2 return back with error: invalid user
            return redirect()->back()->with('message','Invalid Credentials');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function RegisterHere()
    {
        //Auth::logout();
        return redirect()->route('register.show');
    }

    //Profile button
    public function viewUser($id)
    {
        $user = Auth::user()->first();
        $employee = Employee::all();
        return view('profile.view',compact('user','employee'));
    }

    public function edit($id)
    {
            $user = Auth::user()->first();
    
    
            return view('profile.edit',compact('user'));
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'emp_id'=>'required',
            'name'=>'required',
            'depart'=>'required',
            'desig'=>'required',
            'email'=>'required',
            'join'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'salary'=>'required',
            'birth'=>'required',
           
            'image'=>'required|max:2048'
          ]);
 
       if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            if ($avatar->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$avatar->getClientOriginalName();
                //store into directory
                $avatar->storeAs('user', $file_name);
            }
           
    User::find($id)->update([
           'emp_id'=> $request->emp_id,
           'name'=>$request->name,
           'depart'=>$request->depart,
           'desig'=>$request->desig,
           'mobile'=>$request->mobile,
           'email'=>$request->email,
           'join'=>$request->join,
           'address'=> $request->address,
           'gender'=>$request->gender,
           'salary'=>$request->salary,
           'birth'=>$request->birth,
           'image'=>$file_name
               
            ]);
        }
        else
        {
            User::find($id)->update([
           'emp_id'=> $request->emp_id,
           'name'=>$request->name,
           'depart'=>$request->depart,
           'desig'=>$request->desig,
           'mobile'=>$request->mobile,
           'email'=>$request->email,
           'join'=>$request->join,
           'address'=> $request->address,
           'gender'=>$request->gender,
           'salary'=>$request->salary,
           'birth'=>$request->birth,     
            ]);
        }
      return redirect()->route('view.user',Auth::id())->with('success','Users Details Updated Successfully!');
    }

    public function dashboard()
    {
       $employees = Employee::count('id');
       $notices = Notice::count('id');
       $attendances = Attendance::whereDate('created_at','=',now()->today())->count('id');
       $leaves = Leave::where('status','=','pending')->count('id');


       return view('index',[
           'employ' => $employees,
           'notice' => $notices,
           'attendance' => $attendances,
           'leave' => $leaves,

       ] );
      
    }
   
}
