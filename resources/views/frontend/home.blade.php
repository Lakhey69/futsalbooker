@extends('frontend.template')
@section('content')
    
<div class="container-fluid ">
<div class="row">
@foreach ($data as $item)
<div style="margin-bottom: 30px" class="col-md-3">
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('/images/futsals/'.$item["image"])}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Futsal : {{$item->futsal_name}}</h5>
      <p class="card-text">Owner Name : {{$item->owner_name}}</p>
      <p class="card-text">Contact : {{$item->contact}}</p>
      <p class="card-text">Email : {{$item->email}}</p>
      <p class="card-text">Address : {{$item->area}},{{$item->area}}</p>
      <a href="#" class="btn btn-primary">Book</a>
    </div>
  </div>
</div>
@endforeach
</div>
</div>
  
@endsection
