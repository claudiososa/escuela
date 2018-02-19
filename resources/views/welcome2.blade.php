@extends('layouts.app')
@section('content')

  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{Storage::disk('public')->url('slider/slide1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{Storage::disk('public')->url('slider/slide2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{Storage::disk('public')->url('slider/slide3.jpg')}}" alt="Third slide">
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
  </div>

  <div class="row">
    <h1>Noticias Destacadas</h1>
  </div>


  <div class="row">


    @forelse ($messages as $message)
      <div class="col-6">
        <img class="img-thumbnail" src="{{Storage::disk('public')->url($message['image'])}}" alt="">
        <p class="card-text">
          {{$message['content']}}
          <a href="/messages/{{$message['id']}}">Leer mas</a>
        </p>
      </div>
    @empty
        <div class="col-12">
          <p>No existen Articulos</p>
        </div>
    @endforelse
  </div>
@endsection
