@extends('master')

@section('content')
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW INTERVIEW DETAILS</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	<tr>
    		<td><h3>Selected Candidates</h3></td>
	
	<td><h3><a href="{{URL::to('/')}}/image/{{$inter->image}}" download class="btn btn-success">
        Download </a></h3></td>
	</tr>
	<tr>

		<td><h3>Job Title</h3></td>
	<td style="word-wrap: break-word"><h3>{{$inter->job}}</h3></td>
	</tr>
	<tr>
		<td><h3>Place</h3></td>
	<td style="word-wrap: break-word"><h3>{{$inter->place}}</h3></td>
	</tr>
	<tr>
		<td><h3>Date</h3></td>
	<td><h3>{{$inter->date}}</h3></td>
	</tr>
	<tr>
<td><h3>Interviewer</h3></td>
	<td><h3>{{$inter->interviewrs}}</h3></td>
	</tr>
	<tr>

        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="{{ route('interview.index') }}" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div>

@endsection