
@extends('admin.adminmaster')
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
<h2 style="color:blue;text-align:center">Booking Requests</h2>
<table class='table table-shaded' border="1px solid black" style="width:90%;margin:auto">
<tr>
    <th>ID</th>
    <th>Futsal Name</th>
    <th>Booker Name</th>
    <th>Booker Contact</th>
    <th>Address</th>
    <th>price</th>
    <th>status</th>
    
    <th colspan="2">Actions</th>
</tr>
@foreach ($data as $booking )
    <tr>
        <td>{{$booking->id}}</td>
        <td>{{$booking->futsal_name}}</td>
        <td>{{$booking->booker_name}}</td>
        <td>{{$booking->booker_contact}}</td>
    <td>{{$booking->area}}</td>
    <td>{{$booking->price}}</td>
    <td>{{$booking->status}}</td>
    
        <td><a href="/admin/booking/{{$booking->id}}/confirm"><button class="btn btn-primary">Confirm</button></a></td>
        <td><a href="/admin/booking/{{$booking->id}}/cancel"><button class="btn btn-primary">Cancel</button></a></td>
        
        <td><a href="/admin/booking/{{$booking->id}}/close"><button class="btn btn-primary">Checked Out</button></a></td>
        @if($booking['status']!='Confirmed')
        <form method="POST" action="/admin/futsal/{{$booking->id}}">
        @csrf
        @method('delete')
        <td><button class='btn btn-danger'>Delete</button></td>
        </form>
@endif
        
    </tr>
    @endforeach


</table>

</body>
</html>
@endsection