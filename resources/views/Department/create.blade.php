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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW DEPARTMENT</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{ route('department.create') }}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="dep_name" class="col-sm-3  col-form-label"><b>DEPARTMENT NAME</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_name" placeholder="Department Name " name="dep_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="dep_head" class="col-sm-3  col-form-label"><b>DEPARTMENT HEAD</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_head" placeholder="Department Head " name="dep_head">
    </div>
  </div>



  <div class="form-group row">
    <div class="col-sm-9">
      <a href="{{ route('department.index') }}" class="btn btn-warning">CANCEL</a>
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