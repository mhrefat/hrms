<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use App\Notice;
use App\Attendance;
use App\Leave;

class IndexController extends Controller
{
    public function index()
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
