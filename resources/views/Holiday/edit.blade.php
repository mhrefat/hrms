
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

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE HOLIDAY</h2>
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{route('holiday.update',['id'=>$holida->id])}}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Event Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Enter Leave Id Here" name="name" required value="{{$holida->name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-3  col-form-label"><b>Holiday Start</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="start" placeholder="Enter Leave Id Here" name="start" required value="{{$holida->start}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-3  col-form-label"><b>Holiday End</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="start" placeholder="Enter Leave Id Here" name="end" required value="{{$holida->end}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter Leave Id Here" name="status" required value="{{$holida->status}}">

        <option>Published</option>
      <option>Up Coming</option>
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="{{ route('holiday.index') }}" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Update</button>
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