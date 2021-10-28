
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

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE INTERVIEW INFORMATION</h2>
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="{{route('interview.update',['id'=>$inter->id])}}" enctype="multipart/form-data" align="center" >

 @csrf

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->

<div class="form-group row">
    <label for="job" class="col-sm-3  col-form-label"><b>Job Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="job" placeholder="ID" name="job" required value="{{$inter->job}}">
    </div>
  </div>


    <div class="form-group row">
    <label for="image" class="col-sm-3  col-form-label"><b>Selected Candidate</b></label>
    <div class="col-sm-8">
      <input type="file" class="form-control " id="image" placeholder="Image" name="image">

      <img src="{{URL::to('/')}}/image/{{$inter->image}}" class="file-thumbnail" width="100" />
      <input type="hidden" name="hidden_iamge" value="{{$inter->image}}" />
    </div>
  </div>
  


  

  <div class="form-group row">
    <label for="place" class="col-sm-3  col-form-label"><b>Location</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="place" placeholder="placement" name="place" required value="{{$inter->place}}">
    </div>
  </div>
<div class="form-group row">
    <label for="date" class="col-sm-3  col-form-label"><b>Interview time& Date</b></label>
    <div class="col-sm-8">
      <input type="datetime-local" class="form-control " id="date" placeholder="datenation" name="date" required value="{{$inter->date}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="interviewrs" class="col-sm-3  col-form-label"><b>interviewrs</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="interviewrs" placeholder="" name="interviewrs" required value="{{$inter->interviewrs}}">
    </div>
  </div>
  

  <div class="form-group row">
    <div class="col-sm-10">
      <a href="{{ route('interview.index') }}" class="btn btn-warning">Cancel</a>
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
<br><br>

@endsection