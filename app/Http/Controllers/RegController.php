<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegController extends Controller
{
	public function showReg()
    {
        return view('register');
    }

    public function doReg(Request $request)
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
        {
         return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
         ]);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('register.show');
    }
   
}
