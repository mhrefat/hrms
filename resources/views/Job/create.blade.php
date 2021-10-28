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
<div class="alert alert-info"  role="alert">

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW JOB DETAILS</h2>
</div><br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{ route('job.create') }}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    <div class="form-group row">
    <label for="title" class="col-sm-4  col-form-label"><b>Job Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="title" placeholder="Job Title" name="title">
    </div>
  </div>

  

  <div class="form-group row">
    <label for="desig" class="col-sm-4  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Department Name" name="desig">
    </div>
  </div>

  <div class="form-group row">
    <label for="descrip" class="col-sm-4  col-form-label"><b>Description</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="descrip" placeholder="Job Description" name="descrip">
    </div>
  </div>

<div class="form-group row">
    <label for="position" class="col-sm-4  col-form-label"><b>Vacancy</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="position" placeholder="Enter Total Position Number Here" name="position">
    </div>
  </div>
  <div class="form-group row">
    <label for="exp" class="col-sm-4  col-form-label"><b>Experience</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="exp" placeholder=" Minimum Experience" name="exp">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-sm-4  col-form-label"><b>Gender</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="gender" placeholder="Enter job Id Here" name="gender">

        <option>Male</option>
       <option>Female</option>
       <option>Both</option>
      

    </select>
    </div>
</div>
<div class="form-group row">
    <label for="close" class="col-sm-4  col-form-label"><b>Application Deadline</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="close" placeholder="Enter Department Name Here" name="close">
    </div>
  </div>
  <div class="form-group row">
    <label for="type" class="col-sm-4  col-form-label"><b>Location</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="type" placeholder="Job Location" name="type">
    </div>
  </div>
  <div class="form-group row">
    <label for="salary" class="col-sm-4  col-form-label"><b>Salary</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="salary" placeholder="Basic Salary" name="salary">
    </div>
  </div>


  <div class="form-group row">
    <label for="status" class="col-sm-4  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter job Id Here" name="status">
        <option>Full-time</option>


        <option>Part-time</option>
        <option>Contractual</option>
      
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-11">
      <a href="{{ route('job.index') }}" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">CRETE</button>
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