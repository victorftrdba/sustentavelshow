@extends('layout.app')

@section('content')

<section class="hero">
<div class="container-fluid justify-content-center align-items-center gx-0">
    <img class="hero-image" src="{{ asset('images/banner/banner-home.jpg') }}" class="img-fluid"/>
    <div class="row">
        <div class="col middle my-5">
            <p class="fs-padrao text-center mb-0">
                Parque Ibirapuera - São Paulo
            </p>
            <p class="fs-padrao text-center">
                15 a 18 de setembro de 2022
            </p>
            <p class="fs-grande text-center">
                O mais completo evento de sustentatibilidade
                começa em
            </p>
            <div class="timer mb-5"></div>
            <div class="text-center">
                <button class="btn btn-success">Seja um dos 180 expositores</button>
            </div>
            
        </div>
    </div>
</div>
</section>

@endsection