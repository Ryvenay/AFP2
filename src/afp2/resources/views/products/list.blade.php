@extends('layout')
@section('content')

<div class="container">
  <div class="row">


  @foreach ($products as $product)
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src={{ $product->img }} class="card-img-top" width="200" height="250"  alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->brand}} {{ $product->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$product->price}}</h6>
          <p class="card-text">{{$product->s_description}}</p>

        </div>
      </div>
    </div>
  @endforeach

  </div>
</div>

@endsection