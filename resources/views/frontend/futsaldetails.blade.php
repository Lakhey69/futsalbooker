@extends('frontend.template')
@section('content')
    
<div style="margin: auto" >
<center>
   
<div  style="margin-bottom: 30px" >
<div  class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('/images/futsals/'.$futsal["image"])}}" alt="Card image cap">
    <div style="margin: auto" class="card-body">
      <h5 class="card-title">Futsal : {{$futsal->futsal_name}}</h5>
      <p class="card-text">Owner Name : {{$futsal->owner_name}}</p>
      <p class="card-text">Contact : {{$futsal->contact}}</p>
      <p class="card-text">Email : {{$futsal->email}}</p>
      <p class="card-text">Address : {{$futsal->city}},{{$futsal->area}}</p>
      <p class="card-text">Price : Rs.{{$futsal->price}}</p>
      <a href="/book/{{$futsal->id}}" class="btn btn-primary">Book</a>
    </div>
  </div>
</div>
</center>
</div>
  
@endsection
