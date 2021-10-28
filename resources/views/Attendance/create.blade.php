@extends('master')

@section('content')
<div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW ATTENDANCE</h2>
</div>

<div class="container">

  @if(session()->has('successIn'))
  <div class="alert alert-success" style="margin-left: 300px;">
    <p>{{session('successIn')}}</p>
  </div>
  @endif
   @if(session()->has('successOut'))
   <div class="alert alert-success" style="margin-left: 300px;">
    <p>{{session('successOut')}}</p>
  </div>
  @endif

 @if(session()->has('error'))
 <div class="alert alert-danger">
    <p>{{session('error')}}</p>
  </div>
  @endif
 
 



     <div class="row" style="margin-top: 100px;">
      <div class="col-lg-12 mb-2"><h3>Today attendacene : {{now()->format('Y.m.d H:i:s')}}</h3></div>
      <div class="col-lg-12">

         <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Employee ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Department</th>
           <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->emp_id}}</td>
            <td>{{$single_data->name}}</td>
            <td >{{$single_data->depart}}</td>
            <td>
                <a href="{{route('attendance.in', ['id'=>$single_data->id])}}" class="btn btn-warning">IN</a>
                <a href="{{route('attendance.out', ['id'=>$single_data->id])}}" class="btn btn-success">Out</a>


                @if(auth()->user()->role==='admin')
                <a href="{{route('attendance.absent', ['id'=>$single_data->id])}}" class="btn btn-success">absent</a>
                @endif
              
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
      </div>
       
     </div>
  
</div>


@endsection