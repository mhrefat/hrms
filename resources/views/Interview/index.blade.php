@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">INTERVIEW INFORMATION</h2>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  <br><br>

<div class="container">
    <h1 class="col-md-12" ><a href="{{route('interview.create')}}" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Job Title</th>
            <th scope="col">Selected Candidate</th>
            <th scope="col">Location</th>
            <th scope="col">Interview Date & Time</th>
            <th scope="col">Interviewers</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($inter as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td style="word-wrap: break-word">{{$single_data->job}}</td>
            <td><a href="{{URL::to('/')}}/image/{{$single_data->image}}" download class="btn btn-success">
        Download </a></td>
            <td style="word-wrap: break-word">{{$single_data->place}}</td>
            <td>{{$single_data->date}}</td>
            <td style="word-wrap: break-word">{{$single_data->interviewrs}}</td>
            <td>
                <a href="{{route('interview.edit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="{{route('interview.show', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>
                <a href="{{route('interview.destroy', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
{{$inter->links()}}    
    @endsection
