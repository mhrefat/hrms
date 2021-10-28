@extends('master')


@section('content')



    <div class="alert alert-info"  role="alert" style="width: 145%">

  <h2 style="text-align: center;" style="color:red; text:bold">ATTENDANCE INFORMATION</h2>
</div><br><br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px;">
    <p>{{$message}}</p>
</div>
@endif  

<br>
<div class="container">

    @if(auth()->user()->role==='employee')

    <h1 class="col-md-12" ><a href="{{route('attendance.create')}}" class="btn btn-info"  ><font size="4">Give Today Attendance</font></a></h1>
    @endif

@if(auth()->user()->role==='admin')
    <h1 class="col-md-12" ><a href="{{route('attendance.create')}}" class="btn btn-info"  ><font size="4"> Edit Attendance</font></a></h1>

@endif




    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">SL</th>
            
         <th scope="col">Employee Id</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Office In Time</th>
            <th scope="col">Office Out Time</th>
            <th scope="col">Status</th>
            
        </tr>
        </thead>
        <tbody>

        @foreach($attend as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->employee->emp_id}}</td>
            <td>{{$single_data->employee->name}}</td>
            <td td style="word-wrap: break-word">{{$single_data->in}}</td>
            <td style="word-wrap: break-word">{{$single_data->out}}</td>
            <td>
                @if($single_data->is_present == 1)
                    <span>Present</span>
                  @else
                    <span>Absent</span>
                @endif
            </td>
            
        </tr>
@endforeach
        </tbody>
    </table>
{{$attend->links()}}    
    @endsection
