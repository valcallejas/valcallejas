@extends('layouts.landing')
@section('title', 'Inicio')
@section('content')

    <div class="container mt-5 pt-5">

        <div class="hero-section">
            <h1>Ropa para Mujer</h1>
            <p>🌸 Eleva tu estilo con prendas que te hacen brillar ✨ ¡Sé tú, sé única! 💃</p>
        </div>


        <div class="row g-4">
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer1.webp') }}" alt="Falda de Jean" />
                    <div class="product-info">
                        <h5>Falda de Jean</h5>
                        <p class="price">$45.990</p>
                        <small class="text-white">Tallas: XS, S, M, L</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer2.webp') }}" alt="Pantalon Negro" />
                    <div class="product-info">
                        <h5>Pantalon Negro</h5>
                        <p class="price">$75.000</p>
                        <small class="text-white">Tallas: S, M, L</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer3.webp') }}" alt="Saco Rosa" />
                    <div class="product-info">
                        <h5>Saco Rosa</h5>
                        <p class="price">$35.000</p>
                        <small class="text-white">Tallas: 26, 28, 30</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer4.webp') }}" alt="Body Negro" />
                    <div class="product-info">
                        <h5>Body Negro</h5>
                        <p class="price">$25.000</p>
                        <small class="text-white">Tallas: S, M, L</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer5.webp') }}" alt="Enterizo" />
                    <div class="product-info">
                        <h5>Enterizo</h5>
                        <p class="price">$80.000</p>
                        <small class="text-white">Tallas: XS, S, M</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="product-card">
                    <img src="{{ asset('img/mujer6.webp') }}" alt="Vestido Negro" />
                    <div class="product-info">
                        <h5>Vestido Negro</h5>
                        <p class="price">$60.000</p>
                        <small class="text-white">Tallas: S, M, L</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
