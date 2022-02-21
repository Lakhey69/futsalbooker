<?php
$user=auth()->user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">FutsalNepal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            
        
          </ul>
          <ul class="navbar-nav ">
      @if(Auth::user())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-target="#navItemGame"  id="navbarDropdown" role="button" data-toggle="dropdown" v-pre>
          <i class="fa fa-user" style="color:blue">
            <span class="badge badge-primary"></span>
          </i><?php
          print($user->name);

          ?>@if($user['verified']=='2')<img style='width: 15px;height:15px' title="Verified" src='{{asset("/images/badges/admin.png")}}'/>@endif
        </a>
        <div id="#navItemGame" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a id="#navItemGame" class="dropdown-item" href="/mybookings">My Bookings</a>
         
          <a id="#navItemGame" class="dropdown-item" href="/logout">Logout</a>
        
         
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">
          <i class="fa fa-user" style="color:green">
           
          </i>
          Login
        </a>
      </li>
@endif
      @if ($user==NULL)
      <span></span>
      @else
@if($user['role']=='3')
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="fa fa-user" style="color:red">
            {{-- <span class="badge badge-success">11</span> --}}
          </i>
          Admin Dashboard
        </a>
      </li>
      @else
          <span></span>
      
      @endif
      @endif
    </ul>
        </div>
      </nav>
      <div style="width: 100%" >
<img style="width: 1350px;height:350px" src="{{asset('/images/futsals/banner.jpg')}}" alt="">

      </div>
      <div>
        @yield('content')
      </div>
</body>
</html>