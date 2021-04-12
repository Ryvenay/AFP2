@extends('layout')
@section('content')

<div class="container items">
  <div class="row justify-content-md-center">

    @if(count($products) === 0)

      <div class="alert alert-danger" role="alert">
        Empty category
      </div>
      
    @else

      @foreach ($products as $product)
        <div class="col-md-auto">
            <div class="card">
              <div class="card-img text-center">
                <img src={{ $product->img }} class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $product->brand}} {{ $product->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$product->price}} Ft</h6>
                <p class="card-text">{{$product->s_description}}</p>
              </div>
              <a href="/products/{{$product->id}}" role="button" class="stretched-link"></a>
            </div>
        </div>
      @endforeach

    @endif
  </div>
</div>

@endsection