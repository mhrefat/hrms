
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

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE JOB DETAILS</h2>
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{route('job.update',['id'=>$Jobe->id])}}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="title" class="col-sm-4  col-form-label"><b>Job Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="title" placeholder="Job Title" name="title" required value="{{$Jobe->title}}">
    </div>
  </div>

  

  <div class="form-group row">
    <label for="desig" class="col-sm-4  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Department Name" name="desig" required value="{{$Jobe->desig}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="descrip" class="col-sm-4  col-form-label"><b>Description</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="descrip" placeholder="Job Description" name="descrip" required value="{{$Jobe->descrip}}">
    </div>
  </div>

<div class="form-group row">
    <label for="position" class="col-sm-4  col-form-label"><b>Vacancy</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="position" placeholder="Enter Total Position Number Here" name="position" required value="{{$Jobe->position}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="exp" class="col-sm-4  col-form-label"><b>Experience</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="exp" placeholder=" Minimum Experience" name="exp" required value="{{$Jobe->exp}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-sm-4  col-form-label"><b>Gender</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="gender" placeholder="Enter job Id Here" name="gender" required value="{{$Jobe->gender}}">

        <option>Male</option>
       <option>Female</option>
       <option>Both</option>
      

    </select>
    </div>
</div>
<div class="form-group row">
    <label for="close" class="col-sm-4  col-form-label"><b>Application Deadline</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="close" placeholder="Enter Department Name Here" name="close" required value="{{$Jobe->close}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="type" class="col-sm-4  col-form-label"><b>Location</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="type" placeholder="Job Location" name="type" required value="{{$Jobe->type}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="salary" class="col-sm-4  col-form-label"><b>Salary</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="salary" placeholder="Basic Salary" name="salary" required value="{{$Jobe->salary}}">
    </div>
  </div>


  <div class="form-group row">
    <label for="status" class="col-sm-4  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter job Id Here" name="status" required value="{{$Jobe->status}}">
        <option>Full-time</option>


        <option>Part-time</option>
        <option>Contractual</option>
      
      

    </select>
    </div>
</div>
  
  <div class="form-group row">
    <div class="col-sm-12">
      <a href="{{ route('job.index') }}" class="btn btn-warning">Cancel</a>
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