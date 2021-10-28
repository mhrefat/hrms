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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW DESIGNATION</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{ route('designation.create') }}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>Designation Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Designation" name="desig">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="dep_name" class="col-sm-3  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
    <select name="dep_name" id="dep_name" class="form-control">
                <option value="">Select Department Name</option>
                @foreach($categories as $category)
                    <option value="{{$category->dep_name}}">{{$category->dep_name}}</option>
                @endforeach
            </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="description" class="col-sm-3  col-form-label"><b>Description</b></label>
    <div class="col-sm-8">
      <textarea name="description" id="description" class="form-control"></textarea>
    </div>
  </div>




  <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="status" placeholder="Enter Leave Id Here" name="status">

        <option>Active</option>
        <option>Inactive</option>

      

    </select>
    </div>
</div>
<br>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="{{ route('designation.index') }}" class="btn btn-warning">CANCEL</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">CREATE</button>
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