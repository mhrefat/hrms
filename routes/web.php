<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/home', 'HomeController@index')
	->name('welcome');
Route::get('/about', 'HomeController@about')
	->name('about');
Route::get('/contact', 'HomeController@contact')
	->name('contact');

	Route::get('/redirects', 'HomeController@redirects')
	->name('index');

Route::get('/login','UserController@showLogin')->name('login');
//Route::post('/admin/do-login','UserController@doLogin')->name('login.do');

Route::get('/register','RegController@showReg')->name('register');
//Route::post('/admin/do-register','RegController@doReg')->name('register.do');


// job display
Route::get('/job/display','JobController@display')->name('job.display');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {

Route::get('/', 'IndexController@index')
	->name('index');

	Route::get('/profile', 'ProfileController@index')
	->name('profile');

	Route::get('/logout','UserController@logout')->name('logout');
	
//	Route::get('/about','AboutController@index')->name('about');


	//dashboard
	Route::get('/dashboard',[UserController::class,'dashboard'])->name('index');
	//user profile
    Route::get('/user/view/{id}','UserController@viewUser')->name('view.user');
	Route::get('/user/{id}/edit','UserController@edit')->name('user.edit');
    Route::post('/user/{id}/update','UserController@update')->name('user.update');

	//Department
	Route::get('/department','DepartmentController@index')->name('department.index');
	Route::post('/department.create','DepartmentController@store');
    Route::get('/department.create','DepartmentController@create')->name('department.create');
	Route::get('/department/{id}/delete','DepartmentController@destroy')->name('department.destroy');
	Route::get('/department/{id}/edit','DepartmentController@edit')->name('department.edit');
    Route::post('/department/{id}/update','DepartmentController@update')->name('department.update');
    Route::get('/department/{id}/show','DepartmentController@show')->name('department.show');

    
    //Designation
	Route::get('/designation','DesignationController@index')->name('designation.index');
	Route::post('/designation.create','DesignationController@store');
    Route::get('/designation.create','DesignationController@create')->name('designation.create');
	Route::get('/designation/{id}/delete','DesignationController@destroy')->name('designation.destroy');
	Route::get('/designation/{id}/edit','DesignationController@edit')->name('designation.edit');
    Route::post('/designation/{id}/update','DesignationController@update')->name('designation.update');
    Route::get('/designation/{id}/show','DesignationController@show')->name('designation.show');


	
//Employee
    Route::get('/employee','EmployeeController@index')->name('employee.index');
	Route::post('/employee.create','EmployeeController@store');
    Route::get('/employee.create','EmployeeController@create')->name('employee.create');
	Route::get('/employee/{id}/delete','EmployeeController@destroy')->name('employee.destroy');
	Route::get('/employee/{id}/edit','EmployeeController@edit')->name('employee.edit');
    Route::post('/employee/{id}/update','EmployeeController@update')->name('employee.update');
    Route::get('/employee/{id}/show','EmployeeController@show')->name('employee.show');

//Salary
	Route::get('/salary','SalaryController@index')->name('salary.index');
	Route::post('/salary.create','SalaryController@store');
    Route::get('/salary.create','SalaryController@create')->name('salary.create');
	Route::get('/salary/{id}/delete','SalaryController@destroy')->name('salary.destroy');
	Route::get('/salary/{id}/edit','SalaryController@edit')->name('salary.edit');
    Route::post('/salary/{id}/update','SalaryController@update')->name('salary.update');
    Route::get('/salary/{id}/show','SalaryController@show')->name('salary.show');

    //Promotion
	Route::get('/promotion','PromotionController@index')->name('promotion.index');
	Route::post('/promotion.create','PromotionController@store');
    Route::get('/promotion.create','PromotionController@create')->name('promotion.create');
	Route::get('/promotion/{id}/delete','PromotionController@destroy')->name('promotion.destroy');
	Route::get('/promotion/{id}/edit','PromotionController@edit')->name('promotion.edit');
    Route::post('/promotion/{id}/update','PromotionController@update')->name('promotion.update');
    Route::get('/promotion/{id}/show','PromotionController@show')->name('promotion.show');

    //Attendance

    Route::get('/attendance','AttendanceController@index')->name('attendance.index');
	Route::post('/attendance.create','AttendanceController@store');
    Route::get('/attendance.create','AttendanceController@create')->name('attendance.create');
	Route::get('/attendance/{id}/delete','AttendanceController@destroy')->name('attendance.destroy');
	Route::get('/attendance/{id}/edit','AttendanceController@edit')->name('attendance.edit');
    Route::post('/attendance/{id}/update','AttendanceController@update')->name('attendance.update');
    Route::get('/attendance/{id}/show','AttendanceController@show')->name('attendance.show');



    Route::get('/attendance/{id}/in','AttendanceController@in')->name('attendance.in');
    Route::get('/attendance/{id}/out','AttendanceController@out')->name('attendance.out');
    Route::get('/attendance/{id}/absent','AttendanceController@absent')->name('attendance.absent');

    //Notice
	Route::get('/notice','NoticeController@index')->name('notice.index');
	Route::post('/notice.create','NoticeController@store');
    Route::get('/notice.create','NoticeController@create')->name('notice.create');
	Route::get('/notice/{id}/delete','NoticeController@destroy')->name('notice.destroy');
	Route::get('/notice/{id}/edit','NoticeController@edit')->name('notice.edit');
    Route::post('/notice/{id}/update','NoticeController@update')->name('notice.update');
    Route::get('/notice/{id}/show','NoticeController@show')->name('notice.show');

    //Leave
	Route::get('/leave','LeaveController@index')->name('leave.index');
	Route::post('/leave.create','LeaveController@store')->name('leave.store');
    Route::get('/leave/create','LeaveController@create')->name('leave.create');
	Route::get('/leave/{id}/delete','LeaveController@destroy')->name('leave.destroy');
	Route::get('/leave/{id}/edit','LeaveController@edit')->name('leave.edit');
    Route::post('/leave/{id}/update','LeaveController@update')->name('leave.update');
    Route::get('/leave/{id}/show','LeaveController@show')->name('leave.show');


    //Holiday
	Route::get('/holiday','HolidayController@index')->name('holiday.index');
	Route::post('/holiday.create','HolidayController@store');
    Route::get('/holiday.create','HolidayController@create')->name('holiday.create');
	Route::get('/holiday/{id}/delete','HolidayController@destroy')->name('holiday.destroy');
	Route::get('/holiday/{id}/edit','HolidayController@edit')->name('holiday.edit');
    Route::post('/holiday/{id}/update','HolidayController@update')->name('holiday.update');
    Route::get('/holiday/{id}/show','HolidayController@show')->name('holiday.show');


	

    //Job
	Route::get('/job','JobController@index')->name('job.index');
	Route::post('/job.create','JobController@store');
    Route::get('/job.create','JobController@create')->name('job.create');
	Route::get('/job/{id}/delete','JobController@destroy')->name('job.destroy');
	Route::get('/job/{id}/edit','JobController@edit')->name('job.edit');
    Route::post('/job/{id}/update','JobController@update')->name('job.update');
    Route::get('/job/{id}/show','JobController@show')->name('job.show');
    

    //Interview
	Route::get('/interview','InterviewController@index')->name('interview.index');
	Route::post('/interview.create','InterviewController@store');
    Route::get('/interview.create','InterviewController@create')->name('interview.create');
	Route::get('/interview/{id}/delete','InterviewController@destroy')->name('interview.destroy');
	Route::get('/interview/{id}/edit','InterviewController@edit')->name('interview.edit');
    Route::post('/interview/{id}/update','InterviewController@update')->name('interview.update');
    Route::get('/interview/{id}/show','InterviewController@show')->name('interview.show');

    });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

