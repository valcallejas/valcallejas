@extends('layouts.landing')
@section('title', 'Inicio')
@section('content')

<main>

    <section class="hero-section">
      <h1 class="fw-bold">Sobre Nosotros</h1>
      <p>Somos una empresa comprometida con ofrecer las mejores prendas y accesorios a nuestros clientes, siempre con la mejor calidad y atención personalizada.</p>
  </section>

  <section class="contenedor-mision-vision container my-5 d-flex flex-column flex-md-row gap-4 justify-content-center">

      <div class="info-card mision p-4">
          <h3>Misión</h3>
          <p>Brindar productos de alta calidad que satisfagan las necesidades y gustos de nuestros clientes, fomentando la confianza y lealtad.</p>
      </div>

      <div class="info-card vision p-4">
          <h3>Visión</h3>
          <p>Ser la tienda líder en moda y accesorios reconocida por innovación, responsabilidad y excelente atención al cliente.</p>
      </div>

  </section>

</main>

@endsection