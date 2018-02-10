@extends('layouts.master')

@section('content')
  <div id="carouselExampleIndicators" class="carousel slide col-lg-12" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('images/mini.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/mu.jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/sa.jpg') }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="row col-lg-12">
  <div class="grid">
    <figure class="effect-lily">
      <img src="{{ asset('images/sa.jpg') }}" alt="img12"/>
      <figcaption>
        <div>
          <h2>Propuesta 1 <span>Encino</span></h2>
          <p>Lily likes to play with crayons and pencils</p>
        </div>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-lily">
      <img src="{{ asset('images/sa.jpg') }}" alt="img1"/>
      <figcaption>
        <div>
          <h2>Propuesta 2 <span>Nogal</span></h2>
          <p>Lily likes to play with crayons and pencils</p>
        </div>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>
  <div class="grid">
    <figure class="effect-lily">
      <img src="{{ asset('images/sa.jpg') }}" alt="img12"/>
      <figcaption>
        <div>
          <h2>Propuesta 3 <span>Pino</span></h2>
          <p>Lily likes to play with crayons and pencils</p>
        </div>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-lily">
      <img src="{{ asset('images/mini.jpg') }}" alt="img1"/>
      <figcaption>
        <div>
          <h2>Propuesta 4 <span>Salam</span></h2>
          <p>Lily likes to play with crayons and pencils</p>
        </div>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>
</div>
@endsection
