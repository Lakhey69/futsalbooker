@extends('frontend.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h2 style="color:blue;text-align:center">My Bookings</h2>
<table class='table table-shaded' border="1px solid black" style="width:90%;margin:auto">
<tr>
    <th>S.N</th>
    <th>Futsal Name</th>
    <th>Your Name</th>
    <th>Your Contact</th>
    <th>Address</th>
    <th>price</th>
    <th>Status</th>
    <th colspan="2">Actions</th>
</tr>
@foreach ($data as $futsal )
    <tr>
        <td>{{$futsal->id}}</td>
        <td>{{$futsal->futsal_name}}</td>
        <td>{{$futsal->booker_name}}</td>
        <td>{{$futsal->booker_contact}}</td>
        <td>{{$futsal->area}}</td>
         <td>{{$futsal->price}}</td>
         <td>{{$futsal->status}}</td>
         @if($futsal['status']=='pending')
         <td style="color: blue"><h5>Waiting for Admin Approvel</h5></td>
         @elseif($futsal['status']=='Confirmed')
         <td style="color: green"><h5>Your Booking Has Been Approved</h5></td>
         @elseif($futsal['status']=='Canceled')
         <td style="color: red"><h5>Sorry, Your Booking Has Been Canceled</h5></td>
        @endif

       

        
    </tr>
    @endforeach


</table>

</body>
</html>
@endsection