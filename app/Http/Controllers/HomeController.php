<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Notice;
use App\Attendance;
use App\Leave;

class HomeController extends Controller
{
    public function index()
   {
   	return view('welcome');
   }
   public function about()
   {
   	return view('about');
   }
   public function contact()
   {
   	return view('contact');
   }
   public function redirects()
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
