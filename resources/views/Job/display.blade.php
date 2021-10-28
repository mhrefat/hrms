<!DOCTYPE html>
<html lang="en">

<head>
    <title>FSL-Web-login</title>
    <x-guest-layout> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <meta name="robots" content="noindex, nofollow">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 70px;
  max-width: 600px;
  height: 380px;
  border: 1px solid #9C9C9C;
  background-color: #96DDF0;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " style="font-size:24px;color: white" href="{{route('welcome')}}">Home</a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" style="font-size:24px;color: white" href="{{route('about')}}">About Us</a>
    </li>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" style="font-size:24px;color: white" href="{{ route('job.display') }}">CAREERS</a>
    </li>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" style="font-size:24px;color: white" href="{{route('contact')}}">CONTACT US</a>
    </li>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" style="font-size:24px;color: white" href="{{ route('login') }}">LOGIN</a>
    </li>

  </ul>
</nav>








<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <h1 class="text-center">Careers in Future Sky LTD </h1>
<hr>



<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Job List</th>
  <th scope="col" width="120">Job Title</th>
  <th scope="col" width="120">Job Department</th>
  <th scope="col" width="120">Job Description</th>
  <th scope="col" width="120">Position</th>
  <th scope="col" width="120">Experience</th>
  <th scope="col" width="120">Gender</th>
  <th scope="col" width="120">Deadline</th>
  <th scope="col" width="120">Location</th>
  <th scope="col" width="120">Basic Salary</th>
  <th scope="col" width="120">Status</th>
  
</tr>
</thead>
<tbody>
    @foreach($Jobe as $key=>$data)
<tr>
	<th scope="row">{{$key+1}}</th>
                <td>{{$data->title}}</td>
                <td>{{$data->desig}}</td>
                <td>{{$data->descrip}}</td>
                <td>{{$data->position}}</td>
                <td>{{$data->exp}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->close}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->salary}}</td>
                <td style="color: green">{{$data->status}}</td>
    @endforeach
</tr>

</tbody>
</table>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Future Sky LTD</h3>
<p class="h5 text-white">Copyrights  <br>  © HR MANAGEMENT System 2021</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="{{route('welcome')}}"> Embrace the possibilities beyond the sky
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>

<style>
    .param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
} 

.shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
}
var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 90px;
    max-height: 75px;
    object-fit: cover;
}
</style>


<style>
    .container{
        padding:0.5%;
    }
</style>

    <script type="text/javascript">
    </script>

</body>
</x-guest-layout>
</html>
