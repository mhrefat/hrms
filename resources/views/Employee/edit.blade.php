
@extends('master')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE EMPLOYEE INFORMATION</h2>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{route('employee.update',['id'=>$emplo->id])}}" enctype="multipart/form-data" align="center" >


 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
 
    <div class="form-group row">
      <label for="image" class="col-sm-3  col-form-label"><b>Profile Picture</b></label>
      <div class="col-sm-8">
        <input type="file" name="image" class="form-control" value="" id="image" placeholder="Select Image">
      </div>
    </div>

  <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="emp_id" placeholder="ID" name="emp_id" required value="{{$emplo->emp_id}}">
    </div>
  </div>



  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Employee Full Name" name="name" required value="{{$emplo->name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="depart" class="col-sm-3  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="depart" placeholder="Department" name="depart" required value="{{$emplo->depart}}">
    </div>
  </div>
<div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>Designation</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Designation" name="desig" required value="{{$emplo->desig}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobile" class="col-sm-3  col-form-label"><b>Mobile</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="mobile" placeholder="(+) Phone" name="mobile" required value="{{$emplo->mobile}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-3  col-form-label"><b>Email</b></label>
    <div class="col-sm-8">
      <input type="email" class="form-control " id="email" placeholder="Email" name="email" required value="{{$emplo->email}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="join" class="col-sm-3  col-form-label"><b>Joining Date</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="join" placeholder="Joining Date" name="join" required value="{{$emplo->join}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-3  col-form-label"><b>Present Address</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="address" placeholder="Address" name="address" required value="{{$emplo->address}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-sm-3  col-form-label"><b>Gender</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="gender" placeholder="Enter holiday Id Here" name="gender" required value="{{$emplo->gender}}">
         <option>Select Gender</option>
        <option>Male</option>
      <option>Female</option>
      

    </select>
    </div>
</div>
<div class="form-group row">
    <label for="salary" class="col-sm-3  col-form-label"><b>Basic Salary</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="salary" placeholder="Salary" name="salary" required value="{{$emplo->salary}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="birth" class="col-sm-3  col-form-label"><b>Date Of Birth</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="birth" placeholder="Birth" name="birth" required value="{{$emplo->birth}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter holiday Id Here" name="status" required value="{{$emplo->status}}">
        <option>Active</option>
      <option>Inactive</option>
    </select>
    </div>
   </div>

   

  <div class="form-group row">
    <div class="col-sm-10">
      <a href="{{ route('employee.index') }}" class="btn btn-warning">CANCEL</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">UPDATE</button>
    </div>
  </div>
  </div>
</form>
<!-- Extended default form grid -->
</div>
 </div>
</form>
</div>
</div>
</div>
<br><br>

@endsection