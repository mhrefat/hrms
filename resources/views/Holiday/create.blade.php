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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW HOLIDAY</h2>
</div><br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{ route('holiday.create') }}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Event Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Event Name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-3  col-form-label"><b>Holiday Start</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="start" placeholder="Enter holiday start Here" name="start">
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-3  col-form-label"><b>Holiday End</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="end" placeholder="Enter holiday start Here" name="end">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter holiday Id Here" name="status">

        <option>Published</option>
      <option>Up Coming</option>
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="{{ route('holiday.index') }}" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Create</button>
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


@endsection