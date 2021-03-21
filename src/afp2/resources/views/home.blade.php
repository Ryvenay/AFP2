@extends('layout')


@section('content')
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/car_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel/car_2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel/car_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h2>NEW PRODUCTS</h2>
<hr>


<div class="container items">
  <div class="row">
  @foreach ($newItems as $newItem)
    <div class="col-md-auto">
      <div class="card">
        <div class="card-img text-center">
          <img src={{ $newItem->img }} class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $newItem->brand}} {{ $newItem->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$newItem->price}} Ft</h6>
          <p class="card-text">{{$newItem->s_description}}</p>
        </div>
        <a href="/products/{{$newItem->id}}" role="button" class="stretched-link"></a>
      </div>
    </div>
  @endforeach



  </div>

</div>
    
@endsection