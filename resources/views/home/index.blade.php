@extends('layout.app')

@section('content')

<section class="hero" style="background-image: url({{ asset('images/banner/banner-home.jpg') }})" data-aos="fade-up" alt="Banner - Sustentável Show">
<div class="container-fluid">
    <div class="row text-white flex-column justify-content-center align-items-center pb-5">
        <div class="col text-center pt-5 mt-5 font-1">
            <p class="mb-0">
                Parque Ibirapuera - São Paulo
            </p>
            <p>
                15 a 18 de setembro de 2022
            </p>
        </div>
        <div class="col-12 col-lg-8 col-xl-7 d-flex justify-content-center align-items-center text-center flex-column">
            <h1 class="font-2 lineheight-1">
                O mais completo evento de sustentatibilidade
                começa em
            </h1>
            <div class="timer d-flex justify-content-center fw-bold mt-5">
                <div id="dias"></div>
                <div class="vertical me-3 me-lg-2 ms-4"></div>
                <div id="horas"></div>
                <div class="vertical me-3 me-lg-2 ms-4"></div>
                <div id="minutos"></div>
                <div class="vertical me-3 me-lg-2 ms-4"></div>
                <div id="segundos"></div>
            </div>
        </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center text-center align-items-center pt-5 mt-5 pb-5 mb-5">
                <button class="btn g-button text-white">Seja um dos 180 expositores</button>
        </div>
    </div>
</div>
</section>

<section class="propevent mt-3 pt-5">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-10">
                <div class="row justify-content-center align-items-center py-5" data-aos="fade-right">
                    <div class="col-12 col-md-7 d-flex justify-content-start align-items-center mb-3 mb-md-0">
                        <img src="https://i.picsum.photos/id/192/485/330.jpg?hmac=HWxZZD3hyBMlis-JSIS97JMqyOPJo5PTqgdOFkafJiI" loading="lazy" alt="Propósito - Sustentável Show" class="img-fluid rounded-border" />
                    </div>
                    <div class="col-12 col-md-5 d-flex justify-content-center align-items-center align-items-md-start flex-column">
                                <h2 class="font-2 text-center text-md-start brown-text mb-2">Propósito</h2>
                                <p class="font-3 lineheight-2 text-center text-md-start gray-text">A inclusão através do conhecimento, o desenvolvimento
                                    sustentável e o consumo consciente. Expor novos hábitos,
                                    boas práticas, soluções e tecnologias inovadoras para que
                                    a sustentabilidade seja incorporada nas atividades
                                    cotidianas da sociedade.</p>
                    </div>
                </div>
                    <div class="row justify-content-center align-items-center py-3 mb-3" data-aos="fade-left">
                        <div class="col-12 col-md-7 order-0 order-md-1 d-flex justify-content-end align-items-center mb-3 mb-lg-0">
                            <img src="https://i.picsum.photos/id/776/485/330.jpg?hmac=AgJ7pC2_YzsNqGSJK4vdtxqh5-dinLd2VL3HMqFjNgY" loading="lazy"  alt="Evento - Sustentável Show" class="img-fluid rounded-border" />
                        </div>
                        <div class="col-12 col-md-5 order-1 order-md-0 d-flex justify-content-center align-items-center align-items-md-start flex-column">
                                <h2 class="font-2 text-center text-md-start brown-text mb-2">Evento</h2>
                                <p class="font-3 lineheight-2 text-center text-md-start gray-text">Ao longo de 4 dias, com exposição, 12 fóruns
                                    temáticos, painéis de dicussão, oficinas, desfile, espaço infância e
                                    ações de responsabilidade social, o Sustentável Show será o mais
                                    completo evento de sustentabilidade do país.</p>
                    </div>
                </div>
        </div>
    </div>
</div>
</section>

<section class="card-slide pt-5">
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center">
            <div class="col-10">
                <div class="row">
            <div class="col-12">
                <h3 class="font-4 brown-text" id="card-slide">Palestrantes confirmados</h3>
            </div>
            <div class="col-12 justify-content-end d-flex">
                <div class="prev ms-5 font-2" style="cursor:pointer;">@include('layout.svg.seta-marrom')</div>
                <div class="next ms-5 font-2 seta" style="cursor:pointer;">@include('layout.svg.seta-marrom')</div>
            </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5 p-4">
                <!-- Slider main container -->
                <div class="one p-md-3 p-xl-0 d-flex justify-content-center align-items-center">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-1.jpg') }});">
                                <div>
                                <div class="text-white calendar-speaker">
                                <p class="font-1 mb-0">16/09</p>
                                <p class="font-1">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="font-1 mb-0">Fórum Lar & Horta</p>
                                <p class="font-6 lineheight-3 mb-0">Sebastião</p>
                                <p class="font-6 lineheight-3">Salgado</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="font-3 lineheight-3">Restaurando um bioma</h2>
                                    <p class="font-19">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-2.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="font-1 mb-0">76/09</p>
                                <p class="font-1">15:00h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="font-1 mb-0">Fórum Lar & Horta</p>
                                <p class="font-6 lineheight-3 mb-0">Fernanda</p>
                                <p class="font-6 lineheight-3">Marcondes</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="font-3 lineheight-3">Projeto Tamar - Espécies bandeira</h2>
                                    <p class="font-19">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-3.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="font-1 mb-0">16/09</p>
                                <p class="font-1">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="font-1 mb-0">Fórum Ecocidade</p>
                                <p class="font-6 lineheight-3 mb-0">Arthur Alvez</p>
                                <p class="font-6 lineheight-3">Pereira</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="font-3 lineheight-3">A revolução do hiperadobe</h2>
                                    <p class="font-19">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-4.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="font-1 mb-0">16/09</p>
                                <p class="font-1">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="font-1 mb-0">Fórum Ar</p>
                                <p class="font-6 lineheight-3 mb-0">Paula</p>
                                <p class="font-6 lineheight-3">Mendes</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="font-3 lineheight-3 text-nowrap">O rio nos céus que nasce na Amazônia</h2>
                                    <p class="font-19">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
        </div>
    </div>
</section>

<section class="tourism" data-aos="fade-down">
    <div class="swiper-wrapper position-relative">

        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/329/1600/900.jpg?hmac=tpfTYm2OKmUXIDQqL3i_-D9oKrQRl2BHlGnurFcvS-M)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Ar</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Ar</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum AR é
                            compartilhar boas práticas e soluções
                            sustentáveis para proteção, monitoramento e
                            purificação do ar.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/942/1600/900.jpg?hmac=rtjhnYluwU-Na7B3a28RtxxaE1pR__F4Nw1LkFQHcO0)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Água</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Água</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum ÁGUA é
                            compartilhar boas práticas e soluções
                            sustentáveis para captação, distribuição, uso
                            e tratamento da água.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/261/1600/900.jpg?hmac=mTGFi5tN-U_CMJ46G0OUXOmYlRy-gwuelxx8ZKVjnTc)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Alimento</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Alimento</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum ALIMENTO
                            é compartilhar boas práticas e soluções
                            sustentáveis para produção de alimentos em
                            larga escala mais eficiente, com menor custo
                            e com menos impactos ao meio ambiente.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/363/1600/900.jpg?hmac=VEoFUSxTX1O81ITX1-W_L5D0yJrarBTVhwIObwtGvT0)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Energia</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Energia</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum ENERGIA
                            é compartilhar boas práticas e soluções
                            sustentáveis para geração, distribuição,
                            mercado, armazenamento e uso de energia.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/435/1600/900.jpg?hmac=-6Il_4D79Pvbsss1fWwppu-FsDc7EmOWmK9aDMVV630)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Reciclagem</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Reciclagem</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum RECICLAGEM
                            é compartilhar boas práticas e soluções
                            sustentáveis para reciclagem, e expor seus
                            resultados expressivos tanto no campo
                            ambiental como no econômico e social.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/329/1600/900.jpg?hmac=tpfTYm2OKmUXIDQqL3i_-D9oKrQRl2BHlGnurFcvS-M)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Lar&Horta</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Lar&Horta</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum LAR&HORTA
                            é compartilhar boas práticas e soluções
                            sustentáveis para hortas urbanas e lares
                            confortáveis e amigos do meio ambiente
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/81/1600/900.jpg?hmac=EeEFp2f2AE0-k5zXDI4hFhOUJyoU4UwDpz4C9MrQ0CU)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum CuidadoPet</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum CuidadoPet</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum CUIDADOPET
                            é compartilhar boas práticas e soluções
                            sustentáveis para a interação de nossos
                            companheiros com as residências, cidades e
                            meio ambiente, visando o bem-estar de todos
                            e o respeito à saúde e natureza.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/88/1600/900.jpg?hmac=X2F0LqvXkBjeftciZ40Z4j4FVWTXuFwWA_Q-hwxZeUY)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum EcoCidade</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum EcoCidade</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum ECOCIDADE
                            é compartilhar boas práticas e soluções
                            sustentáveis para construções,
                            processos construtivo, infraestrutura
                            verde, acessível e inclusiva.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/449/1600/900.jpg?hmac=efrTURA27YE4PM7eFMRYli7MBcJJvaiUR8oCaaSyGaE)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Esporte</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Esporte</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum ESPORTE
                            é buscar a integração social através
                            da inclusão de grupos vulneráveis e de
                            acessibilidade na prática esportiva.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/22/1600/900.jpg?hmac=uLWQ-QJrENqwG046VwkC0k6d0UHH2Tt6u5TMgA6hzBE)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Moda&Beleza</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Moda&Beleza</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum MODA&BELEZA
                            é compartilhar boas práticas e soluções
                            sustentáveis para a indústria de vestuários,
                            cosméticos e higiene.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-size:cover;background-image: url(https://i.picsum.photos/id/520/1600/900.jpg?hmac=vAOiopvaC0hM6S6wMsHezClIh3z7RRheHcr9E8zybfk)" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Mobilidade</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Mobilidade</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum MOBILIDADE
                            é compartilhar boas práticas e soluções
                            sustentáveis para modais de transporte de
                            pessoas e mercadorias.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
        <div class="swiper-slide">
    <div class="container-fluid pt-3" style="height:925px;background-image: url({{ asset('images/banner/forum-turismo.jpg') }})" >
        <div class="container">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center" id="tourism">
                <p class="font-9">Fóruns</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-10">
                <div class="row flex-column text-white">
                    <div class="col mb-4">
                        @include('layout.svg.icone-turismo')
                    </div>
                    <div class="col-12 col-lg-5 mb-3 mb-lg-3">
                        <p class="font-15 lineheight-3">Fórum Turismo</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <h2 class="font-21 mb-3">Conheça o Fórum Turismo</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            O principal objetivo do Fórum TURISMO
                            é compartilhar boas práticas e
                            soluções sustentáveis na atividade
                            turística, infraestrutura e seus aspectos
                            socioeconômicos
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

    </div>
        <div class="elements gx-0"></div>
</section>

<section class="integration-center background-green pb-5 mb-5">
<div class="container pb-5">
    <div class="row text-white mb-4">
        <div class="col-12 col-lg-10 pt-5" id="integration-center">
            <p class="font-13">Centro de Integração</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center pb-5">
        <div class="col-10 col-lg-10 d-block d-lg-flex">
            <div class="row flex-column text-white">
                <div class="col-12 col-lg-8 mb-3 mt-4">
                    <p class="font-15 lineheight-3">Mão na massa</p>
                </div>
                <div class="col-12 col-lg-12 mb-3">
                    <h2 class="font-21">Painéis, oficinas e espaços com atividades</h2>
                </div>
                <div class="col-12 col-lg-10 mb-3">
                    <p class="font-3">
                        A área de exposição proporcionará aos visitantes a oportunidade de além de
                        conhecer serviços e produtos que possam incorporar mais sustentabilidade em seus
                        hábitos cotidianos, também saber as práticas empresariais das marcas que já fazem
                        parte do seu dia a dia e como a escolha consciente de seu consumo são essenciais
                        para o cuidado com o meio ambiente.
                    </p>
                    <p class="font-3">
                        Buscando promover uma experiência completa,
                        o evento contará com um espaços de atividades
                        diversas, conforme descrito a seguir nos blocos
                    </p>
                </div>
                <div class="col-10 col-lg-6 d-flex justify-content-center align-items-center align-items-lg-start flex-column">
                    <div class="d-flex align-items-center flex-column">
                    <a href="#" class="btn d-flex justify-content-center align-items-center rounded-border text-white">Inscreva-se agora</a>
                    <a href="#" class="text-white">Ofereça uma atividade</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column pt-5 pb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-4">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Espaço Paz
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                            <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Espaço Paz
                                </p>
                                <p class="font-7">
                                    Espaço descontraído de descanso para recarregar as energias, para
                                    proporcionar relaxamentoe interação dos participantes, contará com local para
                                    carregamento de celulares e demais dispositivos móveis.
                                </p>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item mb-4">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Colabora
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                                <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Colabora
                                </p>
                                <p class="font-7">
                                    Convidamos nossos expositores a oferecer seus serviços e produtos de
                                    sustentabilidade a instituições filantrópicas e, através do COLABORA, o Sustentável
                                    Show fomenta a viabilização econômica desses projetos, bem como incentiva o
                                    público presente no evento a contribuir com essas atividades sociais.
                                </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item mb-4">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Centro de Negócios
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                                <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Centro de Negócios
                                </p>
                                <p class="font-7">
                                    Com consultores qualificados o centro de negócios atuará como catalizador de
                                    projetos, identificando as melhores soluções para cada demanda bem como formas
                                    de viabilização e linhas de crédito disponíveis.
                                </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Espaço Infância
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body text-white">
                                <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Espaço Infância
                                </p>
                                <p class="font-7">
                                    No Espaço Infância convidamos educadores e instituições de ensino a entreter as
                                    crianças em atividades lúdicas que reforce ainda mais a consciência socioambiental
                                    dessa geração já privilegiada e tão conectada.
                                </p>
                                <p class="font-7">
                                    Educadores e instituições, abordando a sustentabilidade de forma lúdica,
                                    despertando a curiosidade e interesse das crianças aos temas.
                                </p>
                                </div>
                            </div>
                            </div>
                          </div>
                          <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Espaço Painel
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body text-white">
                                <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Espaço Painel
                                </p>
                                <p class="font-7">
                                Inspirado no modelo World Cafe, o Espaço Painel tem uma dinâmica flexível, sensível
                                e poderosa para gerar diálogos colaborativos entre os indivíduos, nos quais eles
                                podem compartilhar seus conhecimentos e descobrir novas
                                oportunidades de ação conjunta.
                                </p>
                                <p class="font-7">
                                Baseado nos sistemas vivos, este enfoque inovador cria redes dinâmicas de
                                conversação que acessam e aproveitam a inteligência coletiva de organizações e
                                comunidades para responder a perguntas significativas.
                                </p>
                                </div>
                            </div>
                            </div>
                          </div>
                            <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingSix">
                              <button class="accordion-button collapsed bg-dgreen text-white font-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Espaço Oficinas
                              </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                              <div class="accordion-body text-white">
                                <div class="text-above p-2">
                                <p class="font-12 mb-1">
                                    Espaço Oficinas
                                </p>
                                <p class="font-7">
                                O Espaço Oficinas oferece aos participantes uma experiência mais imersiva em
                                aprofundar conhecimentos. Oferecida pelas empresas parceiras, a dinâmica
                                permite aos participantes ampliar seus conhecimentos e
                                direcionar sua capacitação profissional.
                                </p>
                                <p class="font-7">
                                Diferentemente dos fóruns, que são exclusivamente técnicos, o Espaço Oficinas
                                permite apresentações comerciais de produtos ou serviços.
                                </p>
                                </div>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="oficinas pt-5">
<div class="container">
    <div class="row">
        <div class="col mb-5" id="oficinas">
            <h2 class="font-13 brown-text">Oficinas oficiais</h2>
        </div>
    </div>
    <div class="row">
        <div class="col position-relative mb-5 d-flex justify-content-center align-items-center">
            <div class="two p-5 p-lg-0 d-flex justify-content-center align-items-center">
                <div class="swiper-wrapper">
                    {{-- DESKTOP --}}
                    <div class="swiper-slide enterprise-card d-none d-xl-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-1.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- MOBILE --}}
                    <div class="swiper-slide enterprise-card-mobile d-flex d-xl-none align-items-center justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-1.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content-mobile mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- DESKTOP --}}
                    <div class="swiper-slide enterprise-card d-none d-xl-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-2.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- MOBILE --}}
                    <div class="swiper-slide enterprise-card-mobile d-flex d-xl-none justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-2.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content-mobile mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- DESKTOP --}}
                    <div class="swiper-slide enterprise-card d-none d-xl-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-3.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- MOBILE --}}
                    <div class="swiper-slide enterprise-card-mobile d-flex d-xl-none justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-3.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content-mobile mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- DESKTOP --}}
                    <div class="swiper-slide enterprise-card d-none d-xl-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-4.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    {{-- MOBILE --}}
                    <div class="swiper-slide enterprise-card-mobile d-flex d-xl-none justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-4.png') }}" loading="lazy" alt="Espaço Painel - Sustentável Show" />
                        <div class="enterprise-content-mobile mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                </div>
                <div class="two-prev d-none d-lg-block">@include('layout.svg.seta-fundo-marrom')</div>
                <div class="two-next d-none d-lg-block">@include('layout.svg.seta-fundo-marrom')</div>
            </div>
        </div>
        <img src="{{ asset('images/icons/swipe-right.svg') }}" class="img-fluid swipe-right d-block d-lg-none" loading="lazy" alt="Deslize para ver mais slides..." />
    </div>
    <div class="row pb-5">
        <div class="col-12 d-flex justify-content-center align-items-center flex-column my-5">
            <a href="#" class="btn text-white g-button">Ofereça uma oficina</a>
        </div>
    </div>
</div>
</section>

<section class="sustainablewear pt-3" style="background-size:cover;background-image:url({{ asset('images/banner/foto-sustainablewear.jpg') }})" loading="lazy" alt="Sustainablewear - Sustentável Show">
    <div class="container">
        <div class="row text-white justify-content-center pt-5 mt-5">
            <div class="col-10 d-flex justify-content-center" id="sustainablewear">
                <div class="row text-white flex-column mb-5 pb-5">
                    <div class="col mb-3">
                        <img src="{{ asset('images/icons/farm-logo.png') }}" loading="lazy" alt="Logo Farm - Sustentável Show" />
                        <p>apresenta</p>
                    </div>
                    <div class="col mb-3">
                        <h2 class="font-15">Sustainablewear</h2>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="orange-border mb-0 p-1">16/09</p>
                        <p class="orange-border border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col mb-3">
                        <h3 class="font-21">Mais que um desfile, um manifesto</h3>
                    </div>
                    <div class="col-12 col-lg-10 mb-3 mb-lg-5">
                        <p class="font-3">
                            O desfile tem o propósito de mostrar a beleza na sua forma mais espontânea e
                            natural, estimulando a autoestima e bem estar do sociedade e, aliando tudo isso, às
                            boas práticas e assim, serem ainda mais valorizadas e apreciadas.
                        </p>
                    </div>
                    <div class="col-10 col-lg-3 d-flex justify-content-start flex-column pb-3">
                        <a href="#" class="btn p-2 text-white g-button">Reserve sua cadeira</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="virada pt-3" style="background-image:url({{ asset('images/banner/banner-virada.jpg') }})" alt="Virada - Sustentável Show">
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 align-items-center flex-column">
            <div class="col-10">
                <div class="row text-white" id="virada">
                    <div class="col mb-3">
                        <img src="{{ asset('images/icons/redbull.png') }}" loading="lazy" alt="RedBull Logo - Sustentável Show" />
                        <p>apresenta</p>
                    </div>
                </div>
                <div class="row flex-column text-white">
                <div class="col-12 col-lg-9 orange-font mb-3">
                    <h2 class="font-23 lineheight-3">
                        Virada
                        Sustentável Show
                    </h2>
                </div>
                <div class="col mb-3">
                    <h3 class="font-21">
                        Fechando com inspiração e celebração
                    </h3>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="font-3">
                        A celebração final, a reunião de todos os atores queridos desse evento gratificante.
                        Com muita arte local, música e descontração, encerramos as atividades com a
                        certeza da missão cumprida e das energias renovadas para os próximos desafios.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="turning container-fluid">
    <div class="container pb-5">
                    <div class="row justify-content-center align-items-center info-dates" id="datas-virada">
                        <div class="col-3 gx-0">
                            <p class="data1 data-virada data-ativo font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px" onClick="openEvent('data1')">15/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data2 data-virada font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;" onClick="openEvent('data2')">16/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data3 data-virada font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;" onClick="openEvent('data3')">17/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data4 data-virada font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;" onClick="openEvent('data4')">18/09</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col gx-0 event-date" id="data1">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3 pb-3" id="flush-headingOne">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Painel: Turismo com observação de baleias</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body position-relative d-block text-center text-md-start d-md-flex">
                                        <img src="{{ asset('images/banner/foto-virada.jpeg') }}" loading="lazy" width="375" class="img-fluid mb-3" />
                                        <div class="d-flex flex-column mt-2">
                                        <h3 class="ms-md-4 brown-text font-18">Painel: Turismo com observação de baleias</h3>
                                        <p class="ms-md-4 orange-font">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                        <div class="calendar-turning text-white text-center">
                                            <p class="calendar-border mb-0 p-1 font-7">16/09</p>
                                            <p class="calendar-border border-top-0 p-1 font-7">14:30h</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingTwo">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Grupo de Teatro Somos Show</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingThree">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Nação Zumbi</p>
                                        </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header pt-3" id="flush-headingFour">
                                    <button class="accordion-button collapsed font-7 orange-font shadow" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Cordel do Fogo Encantado</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col gx-0 event-date" id="data2" style="display:none;">
                            <div class="accordion accordion-flush" id="accordionFlushExampleB">
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3 pb-3" id="flush-headingA">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA" aria-expanded="false" aria-controls="flush-collapseA">
                                    <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Painel: Turismo com observação de baleias</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseA" class="accordion-collapse collapse show" aria-labelledby="flush-headingA" data-bs-parent="#accordionFlushExampleB">
                                    <div class="accordion-body position-relative d-block text-center text-md-start d-md-flex">
                                        <img src="https://i.picsum.photos/id/684/380/250.jpg?hmac=OlGiteKg7TTSlaGO1NdyicU9I1ZWV8368utdcC2eP4U" loading="lazy" width="375" class="img-fluid mb-3" />
                                        <div class="d-flex flex-column mt-2">
                                        <h3 class="ms-md-4 brown-text font-18">Painel: Turismo com observação de baleias</h3>
                                        <p class="ms-md-4 orange-font">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                        <div class="calendar-turning text-white text-center">
                                            <p class="calendar-border mb-0 p-1 font-7">16/09</p>
                                            <p class="calendar-border border-top-0 p-1 font-7">14:30h</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingB">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseB" aria-expanded="false" aria-controls="flush-collapseB">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Grupo de Teatro Somos Show</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseB" class="accordion-collapse collapse" aria-labelledby="flush-headingB" data-bs-parent="#accordionFlushExampleB">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingC">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseC" aria-expanded="false" aria-controls="flush-collapseC">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Nação Zumbi</p>
                                        </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseC" class="accordion-collapse collapse" aria-labelledby="flush-headingC" data-bs-parent="#accordionFlushExampleB">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header pt-3" id="flush-headingD">
                                    <button class="accordion-button collapsed font-7 orange-font shadow" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseD" aria-expanded="false" aria-controls="flush-collapseD">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Cordel do Fogo Encantado</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseD" class="accordion-collapse collapse" aria-labelledby="flush-headingD" data-bs-parent="#accordionFlushExampleB">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col gx-0 event-date" id="data3" style="display:none;">
                            <div class="accordion accordion-flush" id="accordionFlushExampleC">
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3 pb-3" id="flush-headingE">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseE" aria-expanded="false" aria-controls="flush-collapseE">
                                    <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Painel: Turismo com observação de baleias</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseE" class="accordion-collapse collapse show" aria-labelledby="flush-headingE" data-bs-parent="#accordionFlushExampleC">
                                    <div class="accordion-body position-relative d-block text-center text-md-start d-md-flex">
                                        <img src="https://i.picsum.photos/id/652/380/250.jpg?hmac=nzskXSwb94uQSdTJP0VSBGjC9YVqgFJPrQUkO35YGgw" loading="lazy" width="375" class="img-fluid mb-3" />
                                        <div class="d-flex flex-column mt-2">
                                        <h3 class="ms-md-4 brown-text font-18">Painel: Turismo com observação de baleias</h3>
                                        <p class="ms-md-4 orange-font">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                        <div class="calendar-turning text-white text-center">
                                            <p class="calendar-border mb-0 p-1 font-7">16/09</p>
                                            <p class="calendar-border border-top-0 p-1 font-7">14:30h</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingF">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseF" aria-expanded="false" aria-controls="flush-collapseF">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Grupo de Teatro Somos Show</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseF" class="accordion-collapse collapse" aria-labelledby="flush-headingF" data-bs-parent="#accordionFlushExampleC">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingG">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseG" aria-expanded="false" aria-controls="flush-collapseG">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Nação Zumbi</p>
                                        </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseG" class="accordion-collapse collapse" aria-labelledby="flush-headingG" data-bs-parent="#accordionFlushExampleC">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header pt-3" id="flush-headingH">
                                    <button class="accordion-button collapsed font-7 orange-font shadow" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseH" aria-expanded="false" aria-controls="flush-collapseH">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Cordel do Fogo Encantado</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseH" class="accordion-collapse collapse" aria-labelledby="flush-headingH" data-bs-parent="#accordionFlushExampleC">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col gx-0 event-date" id="data4" style="display:none;">
                            <div class="accordion accordion-flush" id="accordionFlushExampleD">
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3 pb-3" id="flush-headingI">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseI" aria-expanded="false" aria-controls="flush-collapseI">
                                    <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Painel: Turismo com observação de baleias</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseI" class="accordion-collapse collapse show" aria-labelledby="flush-headingI" data-bs-parent="#accordionFlushExampleD">
                                    <div class="accordion-body position-relative d-block text-center text-md-start d-md-flex">
                                        <img src="https://i.picsum.photos/id/932/380/250.jpg?hmac=fsgpOVCrJpOY0TKY0Teus2Zbc7MOh8IOjzUL1PHYCm0" loading="lazy" width="375" class="img-fluid mb-3" />
                                        <div class="d-flex flex-column mt-2">
                                        <h3 class="ms-md-4 brown-text font-18">Painel: Turismo com observação de baleias</h3>
                                        <p class="ms-md-4 orange-font">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                        <div class="calendar-turning text-white text-center">
                                            <p class="calendar-border mb-0 p-1 font-7">16/09</p>
                                            <p class="calendar-border border-top-0 p-1 font-7">14:30h</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingJ">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseJ" aria-expanded="false" aria-controls="flush-collapseJ">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Grupo de Teatro Somos Show</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseJ" class="accordion-collapse collapse" aria-labelledby="flush-headingJ" data-bs-parent="#accordionFlushExampleD">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border-bottom:3px solid orange">
                                    <h2 class="accordion-header pt-3" id="flush-headingK">
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseK" aria-expanded="false" aria-controls="flush-collapseK">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Nação Zumbi</p>
                                        </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseK" class="accordion-collapse collapse" aria-labelledby="flush-headingK" data-bs-parent="#accordionFlushExampleD">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header pt-3" id="flush-headingL">
                                    <button class="accordion-button collapsed font-7 orange-font shadow" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseL" aria-expanded="false" aria-controls="flush-collapseL">
                                        <div class="d-flex align-items-center text-lg-center">
                                        <p class="orange-border text-center p-2 ms-4">16h</p>
                                        <p class="ms-4">Cordel do Fogo Encantado</p>
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseL" class="accordion-collapse collapse" aria-labelledby="flush-headingL" data-bs-parent="#accordionFlushExampleD">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-12 d-flex justify-content-center align-items-center pt-5 mb-5">
                <a href="#" class="btn d-flex justify-content-center align-items-center text-white g-button">Reservar ingressos</a>
            </div>
        </div>
    </div>
</section>

<section class="programacao bg-light pt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
                    <div class="col">
                        <p class="font-13 brown-text mb-5" id="programacao">Programação completa</p>
                    </div>
                <div class="row justify-content-center align-items-center" id="datas">
                    <div class="col-3 gx-0">
                        <p class="data data-ativo2 font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-top-left-radius:15px;" onClick="openEvent2('data5')">15/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-left:4px solid orange" onClick="openEvent2('data6')">16/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-right:4px solid orange;border-left:4px solid orange" onClick="openEvent2('data7')">17/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-top-right-radius:15px;" onClick="openEvent2('data8')">18/09</p>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col event-date2" id="data5">
                        <div class="accordion accordion-flush shadow" id="accordionFlushExample2">
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA1">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA1" aria-expanded="false" aria-controls="flush-collapseA1">
                                    Palestras
                                </button>
                                </h2>
                                <div id="flush-collapseA1" class="accordion-collapse collapse show" aria-labelledby="flush-headingA1" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body text-white d-none d-md-flex justify-content-between p-5 pt-0">
                                        @php
                                        $count = 2;
                                        $count2 = 10;
                                        @endphp
                                        @for ($i = 0; $i <= $count; $i++)
                                        <div class="table-pavilion pb-4">
                                            <div class="text-center pt-3 mb-lg-4">
                                                <p class="font-5 mb-0">Pavilhão B</p>
                                            </div>
                                            @for ($i2 = 0; $i2 < $count2; $i2++)
                                            <div class="font-19 p-1 d-flex justify-content-between" style="border-bottom: 1px solid white">
                                                <p class="mb-0 ms-2 mt-3">10h</p>
                                                <p class="mb-0 me-2 mt-3">Cadastramento Oficial</p>
                                            </div>
                                            @endfor
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA2">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA2" aria-expanded="false" aria-controls="flush-collapseA2">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseA2" class="accordion-collapse collapse" aria-labelledby="flush-headingA2" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA3">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA3" aria-expanded="false" aria-controls="flush-collapseA3">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseA3" class="accordion-collapse collapse" aria-labelledby="flush-headingA3" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col event-date2" id="data6" style="display:none;">
                        <div class="accordion accordion-flush shadow" id="accordionFlushExample3">
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA4">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA4" aria-expanded="false" aria-controls="flush-collapseA4">
                                    Palestras 2
                                </button>
                                </h2>
                                <div id="flush-collapseA4" class="accordion-collapse collapse show" aria-labelledby="flush-headingA4" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body text-white d-none d-md-flex justify-content-between p-5 pt-0">
                                        @for ($i = 0; $i <= $count; $i++)
                                        <div class="table-pavilion pb-4">
                                            <div class="text-center pt-3 mb-lg-4">
                                                <p class="font-5 mb-0">Pavilhão B</p>
                                            </div>
                                            @for ($i2 = 0; $i2 < $count2; $i2++)
                                            <div class="font-19 p-1 d-flex justify-content-between" style="border-bottom: 1px solid white">
                                                <p class="mb-0 ms-2 mt-3">10h</p>
                                                <p class="mb-0 me-2 mt-3">Cadastramento Oficial</p>
                                            </div>
                                            @endfor
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA5">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA5" aria-expanded="false" aria-controls="flush-collapseA5">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseA5" class="accordion-collapse collapse" aria-labelledby="flush-headingA5" data-bs-parent="#accordionFlushExample3">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA6">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA6" aria-expanded="false" aria-controls="flush-collapseA6">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseA6" class="accordion-collapse collapse" aria-labelledby="flush-headingA6" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col event-date2" id="data7" style="display:none;">
                        <div class="accordion accordion-flush shadow" id="accordionFlushExample4">
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA7">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA7" aria-expanded="false" aria-controls="flush-collapseA7">
                                    Palestras 3
                                </button>
                                </h2>
                                <div id="flush-collapseA7" class="accordion-collapse collapse show" aria-labelledby="flush-headingA7" data-bs-parent="#accordionFlushExample4">
                                    <div class="accordion-body text-white d-none d-md-flex justify-content-between p-5 pt-0">
                                        @for ($i = 0; $i <= $count; $i++)
                                        <div class="table-pavilion pb-4">
                                            <div class="text-center pt-3 mb-lg-4">
                                                <p class="font-5 mb-0">Pavilhão B</p>
                                            </div>
                                            @for ($i2 = 0; $i2 < $count2; $i2++)
                                            <div class="font-19 p-1 d-flex justify-content-between" style="border-bottom: 1px solid white">
                                                <p class="mb-0 ms-2 mt-3">10h</p>
                                                <p class="mb-0 me-2 mt-3">Cadastramento Oficial</p>
                                            </div>
                                            @endfor
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA8">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA8" aria-expanded="false" aria-controls="flush-collapseA8">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseA8" class="accordion-collapse collapse" aria-labelledby="flush-headingA8" data-bs-parent="#accordionFlushExample4">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA9">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA9" aria-expanded="false" aria-controls="flush-collapseA9">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseA9" class="accordion-collapse collapse" aria-labelledby="flush-headingA9" data-bs-parent="#accordionFlushExample4">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col event-date2" id="data8" style="display:none;">
                        <div class="accordion accordion-flush shadow" id="accordionFlushExample5">
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA10">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA10" aria-expanded="false" aria-controls="flush-collapseA10">
                                    Palestras 4
                                </button>
                                </h2>
                                <div id="flush-collapseA10" class="accordion-collapse collapse show" aria-labelledby="flush-headingA10" data-bs-parent="#accordionFlushExample5">
                                    <div class="accordion-body text-white d-none d-md-flex justify-content-between p-5 pt-0">
                                        @for ($i = 0; $i <= $count; $i++)
                                        <div class="table-pavilion pb-4">
                                            <div class="text-center pt-3 mb-lg-4">
                                                <p class="font-5 mb-0">Pavilhão B</p>
                                            </div>
                                            @for ($i2 = 0; $i2 < $count2; $i2++)
                                            <div class="font-19 p-1 d-flex justify-content-between" style="border-bottom: 1px solid white">
                                                <p class="mb-0 ms-2 mt-3">10h</p>
                                                <p class="mb-0 me-2 mt-3">Cadastramento Oficial</p>
                                            </div>
                                            @endfor
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA11">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA11" aria-expanded="false" aria-controls="flush-collapseA11">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseA11" class="accordion-collapse collapse" aria-labelledby="flush-headingA11" data-bs-parent="#accordionFlushExample5">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingA12">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA12" aria-expanded="false" aria-controls="flush-collapseA12">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseA12" class="accordion-collapse collapse" aria-labelledby="flush-headingA12" data-bs-parent="#accordionFlushExample5">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</section>
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center pt-5 mt-5 mb-5 pb-5">
            <a href="#" class="btn d-flex justify-content-center align-items-center text-white g-button">Reservar ingressos</a>
        </div>
    </div>
<section class="local bg-light pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-6">
                <div class="row">
                    <div class="col gx-0 mb-4">
                        <p class="font-16 brown-text">Como chegar:</p>
                    </div>
                </div>
                        <div class="row localization">
                        <div class="col-12 col-lg-7 m-2">
                        <p class="font-5 brown-text mb-3">Endereço</p>
                        <p class="lbrown" style="font-size:0.8em;">Av. Pedro Álvares Cabral - Vila Mariana,
                        São Paulo - SP, 04094-050</p>
                    </div>
                </div>
                        <div class="row metro mb-3">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Metrô</p>
                                <p class="font-7 lbrown mb-1">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="font-7 lbrown mb-1">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="font-7 lbrown mb-2">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <button class="btn btn-outline-light font-7">Ver mais linhas</button>
                    </div>
                </div>
                        <div class="row bus mb-3">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Ônibus</p>
                                <p class="font-7 lbrown mb-1">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="font-7 lbrown mb-1">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="font-7 lbrown mb-2">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <button class="btn btn-outline-light font-7">Ver mais linhas</button>
                    </div>
                </div>
                        <div class="row park mb-5">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Estacionamentos</p>
                                <p class="font-7 lbrown mb-1">Maxipark Fleury Ibirapuera</p>
                                <p class="font-7 lbrown mb-1">Maxipark Fleury Ibirapuera</p>
                                <p class="font-7 lbrown mb-2">Maxipark Fleury Ibirapuera</p>
                                <button class="btn btn-outline-light font-7">Ver mais</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14410.81960021496!2d-49.29428415!3d-25.448127649999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1628703997804!5m2!1spt-BR!2sbr" width="800" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 d-block d-lg-none">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14411.592924522613!2d-49.2129343!3d-25.441665699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1628735329762!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<script>
function openEvent(eventName) {
    var i;
    var x = document.getElementsByClassName("event-date");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(eventName).style.display = "block";
}

function openEvent2(eventName2) {
    var i2;
    var xx = document.getElementsByClassName("event-date2");
    for (i2 = 0; i2 < xx.length; i2++) {
        xx[i2].style.display = "none";
    }
    document.getElementById(eventName2).style.display = "block";
}

// Datas da section virada
var header_virada = document.getElementById("datas-virada");
var btns_virada = header_virada.getElementsByClassName("data-virada");
for (var i2 = 0; i2 < btns_virada.length; i2++) {
  btns_virada[i2].addEventListener("click", function() {
  var current2 = document.getElementsByClassName("data-ativo");
  current2[0].className = current2[0].className.replace(" data-ativo", "");
  this.className += " data-ativo";
  });
}

// Datas da section programacao
var header = document.getElementById("datas");
var btns = header.getElementsByClassName("data");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("data-ativo2");
  current[0].className = current[0].className.replace(" data-ativo2", "");
  this.className += " data-ativo2";
  });
}

function scrolldiv(div) {
                window.scrollTo(0,
          findPosition(document.getElementById(div)));
            }
    function findPosition(obj) {
            var currenttop = 0;
                if (obj.offsetParent) {
                    do {
                        currenttop += obj.offsetTop;
                    } while ((obj = obj.offsetParent));
                    return [currenttop];
        }
}
</script>
@endsection
