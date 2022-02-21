@php
    $user=auth()->user();
@endphp

@extends('frontend.template')
@section('content')
<center>
<div style="margin:50px" class="container">
    <form action="/confirmbooking" method="POST">
@csrf
    <input type="text" name="futsal_id" value="{{$futsal->id}}" style="width: 500px;height: auto;" readonly hidden><br>
    <input type="text" name="user_id" value="{{$user->id}}" style="width: 500px;height: auto;" readonly hidden><br>
    <h5>Futsal Name</h5>
    <input type="text" name="futsal_name" value="{{$futsal->futsal_name}}" style="width: 500px;height: auto;" readonly><br>
    <h5>Location</h5>
    <input type="text" name="area" value="{{$futsal->area}}" style="width: 500px;height: auto;" readonly><br>
    <h5>Price</h5>
    <input type="text" name="price" value="{{$futsal->price}}" style="width: 500px;height: auto;" readonly><br>
    <h5>Name</h5>
    <input type="text" name="booker_name" placeholder="Enter your name" style="width: 500px;height: auto;" required>
    <h5>Contact</h5>
    <input type="number" placeholder="Enter your contact number" name="booker_contact" style="width: 500px;height: auto;" required>
 <br> <br><br>  
    <button class="btn btn-primary">Confirm</button>
</form>
</div>
</center>



@endsection