@extends('layouts.landing')
@section('title', 'Inicio')
@section('content')

    <div class="hero-section">
    <h1>Ropa para Hombre</h1>
    <p>Explora lo mejor en moda masculina, con estilo y actitud 💼🔥</p>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre1.webp') }}" alt="Producto Hombre 1">
                <div class="product-info">
                    <h5>Camisa de Botones </h5>
                    <p class="price">$49,900</p>
                    <small class="text-white">Tallas: S, M, L, XL</small>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre2.webp') }}" alt="Producto Hombre 2">
                <div class="product-info">
                    <h5>Camiseta Basica</h5>
                    <p class="price">$69,900</p>
                    <small class="text-white">Tallas: S, M, L, XL</small>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre3.webp') }}" alt="Producto Hombre 3">
                <div class="product-info">
                    <h5>Jean Clasico</h5>
                    <p class="price">$199,900</p>
                    <small class="text-white">Tallas: 32, 34, 36, 38</small>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre4.webp') }}" alt="Producto Hombre 4">
                <div class="product-info">
                    <h5>Hoodie</h5>
                    <p class="price">$79,900</p>
                    <small class="text-white">Tallas: S, M, L, XL</small>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre5.png') }}" alt="Producto Hombre 5">
                <div class="product-info">
                    <h5>Camiseta Estampada</h5>
                    <p class="price">$49,900</p>
                    <small class="text-white">Tallas: S, M, L, XL</small>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('img/hombre6.webp') }}" alt="Producto Hombre 6">
                <div class="product-info">
                    <h5>Camiseta Azul</h5>
                    <p class="price">$29,900</p>
                    <small class="text-white">Tallas: S, M, L, XL</small>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
