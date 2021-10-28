<!DOCTYPE html>
<html lang="en">

<head>
    <title>Future Sky Limited</title>
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
  height: 220px;
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

<div id="login">
        <h2 class="text-center text-white pt-5"><b>Welcome To Future Sky Ltd</b></h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">      
<x-jet-validation-errors class="mb-4" />
                
               
                    <div id="login-box" class="col-md-12">
          


                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                            <p>Address: House: 439, Road: 06, Avenue: 06, Mirpur DOHS,
                                1216 Mirpur, Dhaka Division, Bangladesh.</p>
                            <p>Cell: 01779978813</p>
                            <p>Mail: info@futureskyltd.com</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
  <script type="text/javascript">
    </script>
</body>
</x-guest-layout>
</html>
