<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\User;
use App\Designation;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if(\auth()->user()->role == 'admin'){
            $emplo=Employee::paginate(5);
            if($request->query('query')){
                $emplo=Employee::where('name','LIKE','%'. $request->query("query") .'%')->paginate(5); 
            }
           }else{

            $emplo=Employee::where('user_id','=',\auth()->user()->id)->paginate(5);
           }
       
     
        return view('Employee.index',compact('emplo'));
    
    }
    public function search(Request $request)
    {
        $emplo = $request->emplo;
        
    }

    public function create()
    {
      $categories=Department::all();
      $designations=Designation::all();
        return view('Employee.create',compact('categories','designations'));
    }

    public function store(Request $request)
    {


      $request->validate([
          'emp_id'=>'required|unique:employees',
          'name'=>'required',
          'depart'=>'required',
          'desig'=>'required',
          'mobile'=>'required|unique:employees',
          'email'=>'required|unique:users|unique:employees',
          'join'=>'required',
          'address'=>'required',
          'gender'=>'required',
          'salary'=>'required',
          'birth'=>'required',
          'status'=>'required',
          'image'=>'required|max:2048'
        ]);


        $file_name='';
        if($request->has('image')) 
        {
            $avatar = $request->file('image');

         
            $file_name = date('Ymdhms').'.' . $avatar->getClientOriginalExtension();
           
            $avatar->storeAs('employee', $file_name);
            $avatar->storeAs('user', $file_name);
        }

        $users = User::create([
            'name'     => $request->input('name'),
            'role'     => "employee",
            'emp_id'=> $request->input('emp_id'),
            'email'    => $request->input('email'),
            'password' => bcrypt('123456'),
            'depart'=>$request->input('depart'),
            'desig'=>$request->input('desig'),
            'mobile'=>$request->input('mobile'),
            'join'=>$request->input('join'),
            'address'=> $request->input('address'),
            'gender'=>$request->input('gender'),
            'salary'=>$request->input('salary'),
            'birth'=>$request->input('birth'),
            'image'=>$file_name
        ]);
        $users->save();

        Employee::create([
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
           'status'=>$request->status,
           'image'=>$file_name
        ]);
     

    return redirect()->route('employee.index')->with('success','Employee Information Save Successfully!');
}
 public function show($id)
    {
        $emplo=Employee::findOrFail($id);
        return view('Employee.show', compact('emplo'));
    }

    public function edit($id)
    {
        $emplo= Employee::find($id);

        return view('Employee.edit', compact('emplo'));
        
    }


public function update(Request $request, $id)
    {


if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            if ($avatar->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$avatar->getClientOriginalName();
                //store into directory
                $avatar->storeAs('employee', $file_name);
                $avatar->storeAs('user', $file_name);
            }

Employee::find($id)->update([
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
           'status'=>$request->status,
           'image'=>$file_name
               
            ]);
        }
        else
        {
            Employee::find($id)->update([
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
           'status'=>$request->status,
           
            ]);
        }


return redirect()->route('employee.index')->with('success','Employee is Update Successfully!');

        
    }

    public function destroy($id)
    {
        $emplo=Employee::find($id);
        $emplo->delete();
        return redirect()->route('employee.index')->with('success','Data Delete Successfully!');
    }
}
