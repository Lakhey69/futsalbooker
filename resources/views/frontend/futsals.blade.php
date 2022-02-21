

@extends('frontend.template')
@section('content')
<div style="padding:10px;margin:auto" >
<div class="row">
    
    @if($data->isEmpty())
    <div style="margin: auto;color:red"><span><h3>Sorry All Futsals Are Currently Booked. Come back after a while</h3></span></div> 
    @else
    @foreach ($data as $futsal)
    
 
    <div class="col-md-3">
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('/images/futsals/'.$futsal["image"])}}" alt="Card image cap">
    <div class="card-body">
        <div>
            <p>Name : {{$futsal->futsal_name}}</p>
            <p>Location : {{$futsal->city}},{{$futsal->area}}</p>
           
        </div>
      <a href="/futsaldetails/{{$futsal->id}}" class="btn btn-primary">Details</a>
    </div>
  </div>
</div>

  @endforeach
  @endif
</div>
</div>
@endsection
       
  