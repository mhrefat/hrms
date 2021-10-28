@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 145%">

  <h2 style="text-align: center;" style="color:red; text:bold">LEAVE INFORMATION</h2>
</div><br><br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  
@if($message=Session::get('warning'))
<div class="alert alert-danger" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  

<div class="container">
    
    @if(auth()->user()->role==='employee')
    <h1 class="col-md-12" ><a href="{{route('leave.create')}}" class="btn btn-info"  ><font size="4">APPLY FOR NEW LEAVE</font></a></h1>
    @endif

    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 155%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Leave Reason</th>
            
         <th scope="col">Employee Id</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Leave From</th>
            <th scope="col">Leave To</th>
            <th scope="col">Total Days</th>
            
             <th scope="col">Emergency Contact</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($leaveee as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td style="word-wrap: break-word">{{$single_data->reason}}</td>
            <td>{{$single_data->emp_id}}</td>
            <td>{{$single_data->name}}</td>
            <td td style="word-wrap: break-word">{{$single_data->from}}</td>
            <td>{{$single_data->to}}</td>
            <td>{{$single_data->diff_in_days}}</td>  <td style="word-wrap: break-word">{{$single_data->mobile}}</td>
            <td>{{$single_data->status}}</td>
            <td>
                @if(auth()->user()->role==='admin')


                <a href="{{route('leave.edit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>

                <a href="{{route('leave.destroy', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>

                @endif


                <a href="{{route('leave.show', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>

                



            </td>
        </tr>
@endforeach
        </tbody>
    </table>
{{$leaveee->links()}}    
    @endsection
