@extends('layout')

@section('content')
<div class="container">
  <h2>{{$product->name}}</h2>
  <p class="product-brand">{{$product->brand}} </p>
  <div class="row">
    <div class="col-md-8">
      <img src="{{asset($product->img)}}" class="product-img">
    </div>
    <div class="col-md-4">
      <p class="price">{{$product->price}} Ft</p>
      <form method="post">
        <div class="form-group">
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Add to cart</button>
      </form>
    </div>
  </div>


</div>

<h2>Description</h2>
<hr>
<div class="container">
{!! $product->description !!}
</div>


@endsection