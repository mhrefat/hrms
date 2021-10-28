@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 195%">

  <h2 style="text-align: center;" style="color:red; text:bold">KODEEO JOB INFORMATION</h2>
</div><br><br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif

<div class="container">
    <h1 class="col-md-12" ><a href="{{route('job.create')}}" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 205%">
        <thead>
        <tr>
            <th scope="col">SL NO</th>
            <th scope="col">Title</th>
            
            <th scope="col">Department</th>
            <th scope="col">Job Description</th>
            <th scope="col">Vacancy</th>
            <th scope="col">Experience</th>
            <th scope="col">Gender</th>
            <th scope="col">Application Deadline</th>
            <th scope="col">Location</th>
            <th scope="col">Salary</th>

            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($Jobe as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td style="word-wrap: break-word">{{$single_data->title}}</td>
            
            <td style="word-wrap: break-word">{{$single_data->desig}}</td>
            <td style="word-wrap: break-word" >{{$single_data->descrip}}</td>
            <td>{{$single_data->position}}</td>
            <td>{{$single_data->exp}}</td>
            <td>{{$single_data->gender}}</td>
            <td >{{$single_data->close}}</td>
            <td>{{$single_data->type}}</td>
            <td>{{$single_data->salary}}</td>

            <td>{{$single_data->status}}</td>
            <td>
                <a href="{{route('job.edit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="{{route('job.show', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>
                <a href="{{route('job.destroy', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
{{$Jobe->links()}}    
    @endsection
