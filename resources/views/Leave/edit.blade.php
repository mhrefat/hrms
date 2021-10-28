
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

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE LEAVE</h2>
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{route('leave.update',['id'=>$leaveee->id])}}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->

<div class="form-group row">
    <label for="reason" class="col-sm-3  col-form-label"><b>Leave Reason</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="reason" name="reason" required value="{{$leaveee->reason}}" readonly>
    </div>
  </div>

    <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="emp_id" placeholder="ID" name="emp_id" required value="{{$leaveee->emp_id}}" readonly>
    </div>
  </div>



  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Employee Full Name" name="name" required value="{{$leaveee->name}}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="from" class="col-sm-3  col-form-label"><b>Leave From</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="from" placeholder="Enter Leave Id Here" name="from" required value="{{$leaveee->from}}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="to" class="col-sm-3  col-form-label"><b>Leave To</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="to" placeholder="Enter Leave Id Here" name="to" required value="{{$leaveee->to}}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="mobile" class="col-sm-3  col-form-label"><b>Emergency Contact</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="mobile" placeholder="(+) Phone" name="mobile" required value="{{$leaveee->mobile}}" readonly>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter Leave Id Here" name="status" required value="{{$leaveee->status}}">

        <option>Pending</option>
      <option>Approved</option>
      <option>Rejected</option>
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-10">
      <a href="{{ route('leave.index') }}" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Update Leave</button>
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