@extends('layouts.landing')
@section('title', 'Inicio')
@section('content')

    <div class="hero-section">
        <h1>Accesorios 👜</h1>
        <p>✨ Los detalles hacen el estilo. ¡Descubre nuestros accesorios! 💎💜</p>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/accesorio1.webp') }}" alt="Accesorio 1">
                    <div class="product-info">
                        <h5>Tote Bag</h5>
                        <p class="price">$29.900</p>
                        <p>Talla única</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/accesorio2.webp') }}" alt="Accesorio 2">
                    <div class="product-info">
                        <h5>Medias de Corazon</h5>
                        <p class="price">$9.900</p>
                        <p>Talla única</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/accesorio3.webp') }}" alt="Accesorio 3">
                    <div class="product-info">
                        <h5>Medias de Mariposa</h5>
                        <p class="price">$9.900</p>
                        <p>Talla única</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
