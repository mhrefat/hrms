@extends('master')

@section('content')
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW JOB DETAILS</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	<tr>
    		<td><h3>JOB TITLE</h3></td>
	
	<td><h3>{{$Jobe->title}}</h3></td>
	</tr>


	<tr>
    		<td><h3>DEPARTMENT</h3></td>
	
	<td><h3>{{$Jobe->desig}}</h3></td>
	</tr>


	<tr>

		<td><h3>JOB DESCRIPTION</h3></td>
	<td style="word-wrap: break-word"><h3>{{$Jobe->descrip}}</h3></td>
	</tr>
	<tr>
    		<td><h3>VACANCY</h3></td>
	
	<td><h3>{{$Jobe->position}}</h3></td>
	</tr>
	<tr>
    		<td><h3>MINIMUM EXPERIENCE</h3></td>
	
	<td><h3>{{$Jobe->exp}}</h3></td>
	</tr>
	<tr>
    		<td><h3>GENDER</h3></td>
	
	<td><h3>{{$Jobe->gender}}</h3></td>
	</tr>
	<tr>
    		<td><h3>APPLICATION DEADLINE</h3></td>
	
	<td><h3>{{$Jobe->close}}</h3></td>
	</tr>
	<tr>
    		<td><h3>LOCATION</h3></td>
	
	<td><h3>{{$Jobe->type}}</h3></td>
	</tr>
	<tr>
    		<td><h3>SALARY</h3></td>
	
	<td><h3>{{$Jobe->salary}}</h3></td>
	</tr>




	<tr>	<td><h3>Status</h3></td>
	<td><h3>{{$Jobe->status}}</h3></td>

	</tr>
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="{{ route('job.index') }}" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div><br><br>

@endsection