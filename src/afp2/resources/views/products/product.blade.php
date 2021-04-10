@extends('layout')

@section('content')
<div class="container">
  <br>
  <h2>{{$product->name}}</h2>
  <p class="product-brand">{{$product->brand}} </p>
  <div class="row">
    <div class="col-md-8">
      <img src="{{asset($product->img)}}" class="product-img">
    </div>
      <div class="col-md-4" >
        <div class="product-desc-box">
          <div class="product-background">
            <p class="price">{{$product->price}} Ft</p>
            <form method="post" class="form-inline">
              @csrf
              <div class="row">
                <div class="col-4" id="product-to-cart">
                  <input type="number" class="form-control" id="quantity" name="quantity" value="1">
                </div>
                <div class="col-5" id="product-to-cart">
                  <button type="submit" class="btn btn-primary mb-2" id="product-btn">Add to cart</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>


</div>

<h2>Description</h2>
<hr>
<div class="container">
{!! $product->description !!}
</div>


@endsection