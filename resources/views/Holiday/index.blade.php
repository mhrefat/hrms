@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold"> OFFICE HOLIDAYS LIST</h2>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  <br><br>

<div>

 <center><h2 style="text-align:; margin-top: 10px auto; background-color:red; padding: 5px; width: 50%">EVERY FRIDAY WEEKLY HOLIDAY</h2></center> 
</div>

<div class="container">

@if(auth()->user()->role==='admin')

    <h1 class="col-md-12" ><a href="{{route('holiday.create')}}" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
@endif

    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Event Name</th>
            <th scope="col">Holiday Start</th>
            <th scope="col">Holiday End</th>

            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($holida as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td style="word-wrap: break-word">{{$single_data->name}}</td>
            <td>{{$single_data->start}}</td>
            <td >{{$single_data->end}}</td>
            <td>{{$single_data->status}}</td>
            <td>
                @if(auth()->user()->role==='admin')


                <a href="{{route('holiday.edit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>


                <a href="{{route('holiday.destroy', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
                @endif



                <a href="{{route('holiday.show', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>



            </td>
        </tr>
@endforeach
        </tbody>
    </table>
{{$holida->links()}}    
    @endsection
