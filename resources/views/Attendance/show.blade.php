@extends('master')

@section('content')
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW LEAVE</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>

<tr>
		<td><h3>Leave Reason</h3></td>
	<td style="word-wrap: break-word"><h3>{{$leaveee->reason}}</h3></td>
	</tr>

    	<tr>
    		<td><h3>Employee Id</h3></td>
	
	<td><h3>{{$leaveee->emp_id}}</h3></td>
	</tr>
	<tr>
    		<td><h3>Employee Name</h3></td>
	
	<td><h3>{{$leaveee->name}}</h3></td>
	</tr>
	<tr>
	<td><h3>Leave From</h3></td>
	<td><h3>{{$leaveee->from}}</h3></td>
	</tr>
	<tr>
		<td><h3>Leave To</h3></td>
	<td><h3>{{$leaveee->to}}</h3></td>
	</tr>
	<tr>
		<td><h3>Emergency Contact</h3></td>
	<td><h3>{{$leaveee->mobile}}</h3></td>
	</tr>
	
	<tr>
		<td><h3>Status</h3></td>
	<td><h3>{{$leaveee->status}}</h3></td>

	</tr>
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="{{ route('leave.index') }}" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div>

@endsection