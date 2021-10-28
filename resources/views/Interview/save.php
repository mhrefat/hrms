@extends('master')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #;">
  <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Room Information</h1>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$errors}}</li>
    @endforeach
  </ul>
</div>
@endif

<form method="post" action="{{route('leave.update',['id'=>$leaveee->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
  @csrf

  <div class="form-group">
                        <label for="name">Enter Leave ID</label>
                        <input name="leave_id" required value="{{$leaveee->leave_id}}" class="form-control" id="name" type="number" >
                    </div>
                    <div class="form-group">
                        <label for="name">From</label>
                        <input name="from" required value="{{$leaveee->from}}" class="form-control" id="name" type="date" >
                    </div>
                    <div class="form-group">
                        <label for="name">To</label>
                        <input name="to" required value="{{$leaveee->to}}" class="form-control" id="name" type="date">
                    </div>
                    <div class="form-group">
                        <label for="name">Reason</label>
                        <input
                     name="reason" required value="{{$leaveee->reason}}" class="form-control" id="name" type="text">
    
                    </div>
                    <div class="form-group">
                        <label for="name">Status</label>
                    
                        <select name="status" required value="{{$leaveee->status}}" class="form-control" id="name" type="text">
      <option>Pending</option>
      <option>Approved</option>
      

    </select>
                    </div>
  
  <input type="submit" name="update" value="update" class="btn btn-primary" >
</form>

@endsection