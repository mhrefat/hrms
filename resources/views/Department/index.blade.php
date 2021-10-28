@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">DEPARTMENT INFORMATION</h2>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  
<br><br>
<div class="container">
    <h1 class="col-md-12"><a href="{{route('department.create')}}" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style=" width: 130%">
        <thead>
        <tr>
            
            <th scope="col">SL</th>
            <th scope="col">DEPARTMENT NAME</th>
            <th scope="col">DEPARTMENT HEAD</th>
       

            <th scope="col">Action</th>
        
        </tr>
        </thead>
        <tbody>

        @foreach($dep as $key=>$single_data)
        <tr>
            
            <th scope="row">{{$key+1}}</th>
            <td td style="word-wrap: break-word">{{$single_data->dep_name}}</td>
            <td td style="word-wrap: break-word">{{$single_data->dep_head}}</td>
           
            <td>
                <a href="{{route('department.edit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="{{route('department.show', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>
                <a href="{{route('department.destroy', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
@endforeach

        </tbody>
    </table>
{{$dep->links()}}    
    @endsection
