@extends('layouts.landing')
@section('title', 'Inicio')
@section('content')

    <div class="hero-section text-center text-white py-5">
        <h1 class="display-4">Explora tu estilo</h1>
        <p class="lead">🔥 Lo mejor en moda, hecho para destacar. 🔥</p>
    </div>


      <div class="container mt-5">
    <h1 class="text-center mb-4">Galeria</h1>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery1.png') }}" alt="Imagen 1">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery2.png') }}" alt="Imagen 2">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery3.png') }}" alt="Imagen 3">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery4.png') }}" alt="Imagen 4">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery6.png') }}" alt="Imagen 5">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="gallery-item">
          <img src="{{ asset('img/gallery5.png') }}" alt="Imagen 6">
        </div>
      </div>
    </div>
  </div>

@endsection