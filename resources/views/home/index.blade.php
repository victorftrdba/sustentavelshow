@extends('layout.app')

@section('content')

<section class="hero" style="background-image: url({{ asset('images/banner/banner-home.jpg') }})" data-aos="fade-up">
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
                    <div class="col-12 col-lg-7 d-flex justify-content-start align-items-center mb-3 mb-lg-0">
                        <img src="https://i.picsum.photos/id/192/485/330.jpg?hmac=HWxZZD3hyBMlis-JSIS97JMqyOPJo5PTqgdOFkafJiI" class="img-fluid rounded-border" />
                    </div>
                    <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center align-items-lg-start flex-column">
                                <h2 class="font-2 text-center text-lg-start brown-text mb-2">Propósito</h2>
                                <p class="font-3 lineheight-2 text-center text-lg-start gray-text">A inclusão através do conhecimento, o desenvolvimento
                                    sustentável e o consumo consciente. Expor novos hábitos,
                                    boas práticas, soluções e tecnologias inovadoras para que
                                    a sustentabilidade seja incorporada nas atividades
                                    cotidianas da sociedade.</p>
                    </div>
                </div>
                    <div class="row justify-content-center align-items-center py-3 mb-3" data-aos="fade-left">
                        <div class="col-12 col-lg-7 order-0 order-lg-1 d-flex justify-content-end align-items-center mb-3 mb-lg-0">
                            <img src="https://i.picsum.photos/id/776/485/330.jpg?hmac=AgJ7pC2_YzsNqGSJK4vdtxqh5-dinLd2VL3HMqFjNgY" class="img-fluid rounded-border" />
                        </div>
                        <div class="col-12 col-lg-5 order-1 order-lg-0 d-flex justify-content-center align-items-center align-items-lg-start flex-column">
                                <h2 class="font-2 text-center text-lg-start brown-text mb-2">Evento</h2>
                                <p class="font-3 lineheight-2 text-center text-lg-start gray-text">Ao longo de 4 dias, com exposição, 12 fóruns
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
                <h3 class="font-4 brown-text">Palestrantes confirmados</h3>
            </div>
            <div class="col-12 justify-content-end d-flex">
                <div class="prev ms-5 font-2">@include('layout.svg.seta-marrom')</div>
                <div class="next ms-5 font-2 seta">@include('layout.svg.seta-marrom')</div>
            </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5 p-4">
                <!-- Slider main container -->
                <div class="one d-flex justify-content-center align-items-center">
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

<section class="tourism" style="background-image: url({{ asset('images/banner/forum-turismo.jpg') }})" data-aos="fade-down">
    <div class="container pt-3">
        <div class="row justify-content-center align-items-center text-white mt-5 mb-3">
            <div class="col d-flex align-items-center">
                <p class="font-9">Fóruns</p>
            </div>
            <div class="col d-flex align-items-center">
                <ul class="d-flex font-8 list-unstyled p-3">
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Ar</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Água</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Alimento</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Energia</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Reciclagem</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Lar&Horta</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">CuidadoPet</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">EcoCidade</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Esporte</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Moda&Beleza</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none">Mobilidade</a></li>
                    <li class="p-2"><a href="#" class="slide-item text-reset text-decoration-none menu-ativo">Turismo</a></li>
                </ul>
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
                        <h2 class="font-21 mb-3">Painel: Turismo com observação de baleias</h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="font-3 lineheight-4 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                            Sed lacinia risus ut malesuada lobortis. Quisque massa enim, aliquet sit amet faucibus eget,
                            molestie sit amet enim. Etiam interdum a est ac laoreet.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Aliquam quis metus fringilla, pharetra mauris ut, tincidunt dolor. Nunc metus purus, auctor a pharetra et,
                            suscipit vel odio. Aenean luctus dapibus auctor. Sed non lacus a erat vestibulum consequat.
                            Nunc quis odio ut magna lobortis porttitor.
                            Integer condimentum elit lectus.
                        </p>
                    </div>
                    <div class="col pb-5">
                        <a href="#" class="btn g-button rounded-border text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="integration-center background-green pb-5 mb-5" data-aos="fade-up">
<div class="container pb-5">
    <div class="row text-white mb-4">
        <div class="col-12 col-lg-10 pt-5">
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
                        Nunc metus purus, auctor a pharetra et, suscipit vel odio.
                        Aenean luctus dapibus auctor. Sed non lacus a erat vestibulum consequat.
                        Nunc quis odio ut magna lobortis porttitor. Integer condimentum elit lectus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                        Sed lacinia risus ut malesuada lobortis.
                        Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                    </p>
                </div>
                <div class="col-10 col-lg-6 d-flex justify-content-center align-items-center align-items-lg-start flex-column">
                    <div class="d-flex align-items-center flex-column">
                    <a href="#" class="btn d-flex justify-content-center align-items-center rounded-border text-white">Inscreva-se agora</a>
                    <a href="#" class="text-white">Ofereça uma atividade</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-lg-0 cartoes d-flex justify-content-center align-items-center align-items-lg-start flex-column text-white pb-5">

                    <a class="dgreen-btn font-13 cartao rounded-0 mb-4 text-reset text-decoration-none p-3"
                    onclick="toggle('divID1')" id="cartao">Espaço Paz</a>
                    <div id="divID1" onclick="toggle('divID1')">
                        <div class="cartao-3 mb-3 p-4">
                            <p class="font-21 mb-0" style="z-index:3;">Espaço Paz</p>
                            <p class="font-7 lineheight-4" style="z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="dgreen-btn font-13 cartao rounded-0 mb-4 text-reset text-decoration-none p-3"
                    onclick="toggle('divID2')" id="cartao">Colabora</a>
                    <div id="divID2">
                        <div class="cartao-3 mb-3 p-4" onclick="toggle('divID2')">
                            <p class="font-21 mb-0" style="z-index:3;">Colabora</p>
                            <p class="font-7 lineheight-4" style="z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="dgreen-btn font-13 cartao rounded-0 mb-4 text-reset text-decoration-none p-3"
                    onclick="toggle('divID3')" id="cartao">Centro de Negócios</a>
                    <div id="divID3">
                        <div class="cartao-3 mb-3 p-4" onclick="toggle('divID3')">
                            <p class="font-21 mb-0" style="z-index:3;">Centro de Negócios</p>
                            <p class="font-7 lineheight-4" style="z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="dgreen-btn font-13 cartao rounded-0 mb-4 text-reset text-decoration-none p-3"
                    onclick="toggle('divID4')" id="cartao">Espaço Infância</a>
                    <div id="divID4">
                        <div class="cartao-3 mb-3 p-4" onclick="toggle('divID4')">
                            <p class="font-21 mb-0" style="z-index:3;">Espaço Infância</p>
                            <p class="font-7 lineheight-4" style="z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="dgreen-btn font-13 cartao rounded-0 mb-4 text-reset text-decoration-none p-3"
                    onclick="toggle('divID5')" id="cartao">Espaço Painel</a>
                    <div id="divID5">
                        <div class="cartao-3 mb-3 p-4" onclick="toggle('divID5')">
                            <p class="font-21 mb-0" style="z-index:3;">Espaço Painel</p>
                            <p class="font-7 lineheight-4" style="z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
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
        <div class="col mb-5">
            <h2 class="font-13 brown-text">Oficinas oficiais</h2>
        </div>
    </div>
    <div class="row">
        <div class="col position-relative mb-5 d-flex justify-content-center align-items-center">
            <div class="two d-flex justify-content-center align-items-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-1.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-2.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-3.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <h3 class="brown-text font-7 mb-2">18/09 - Espaço Painel</h3>
                            <h2 class="font-14 brown-text mb-3">A energia 100% renovável é só o começo</h2>
                            <p class="font-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-4.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
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
        <img src="{{ asset('images/icons/swipe-right.svg') }}" class="img-fluid swipe-right d-block d-lg-none" />
    </div>
    <div class="row pb-5">
        <div class="col-12 d-flex justify-content-center align-items-center flex-column my-5">
            <a href="#" class="btn text-white g-button">Ofereça uma oficina</a>
        </div>
    </div>
</div>
</section>

<section class="pt-3" style="background-size:cover;background-image:url({{ asset('images/banner/foto-sustainablewear.jpg') }})">
    <div class="container">
        <div class="row text-white justify-content-center pt-5 mt-5">
            <div class="col-10 d-flex justify-content-center">
                <div class="row text-white flex-column mb-5 pb-5">
                    <div class="col mb-3">
                        <img src="{{ asset('images/icons/farm-logo.png') }}" />
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                            Sed lacinia risus ut malesuada lobortis.
                            Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            Etiam interdum a est ac laoreet.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Aliquam quis metus fringilla, pharetra mauris ut, tincidunt dolor.
                            Nunc metus purus, auctor a pharetra et, suscipit vel odio.
                            Aenean luctus dapibus auctor. Sed non lacus a erat vestibulum consequat.
                            Nunc quis odio ut magna lobortis porttitor.
                            Integer condimentum elit lectus.
                        </p>
                    </div>
                    <div class="col-10 col-lg-3 d-flex justify-content-start flex-column pb-3">
                        <a href="#" class="btn rounded p-2 text-white g-button">Reserve sua cadeira</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="virada pt-3" style="background-image:url({{ asset('images/banner/banner-virada.jpg') }})">
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 align-items-center flex-column">
            <div class="col-10">
                <div class="row text-white">
                    <div class="col mb-3">
                        <img src="{{ asset('images/icons/redbull.png') }}" />
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                        Sed lacinia risus ut malesuada lobortis.
                        Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="turning container-fluid">
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center align-items-center mb-5">
                <div class="col-12 shadow info-dates">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3 gx-0">
                            <p class="data1 font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px">15/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data2 font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;">16/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data3 font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;">17/09</p>
                        </div>
                        <div class="col-3 gx-0">
                            <p class="data4 font-22 d-flex justify-content-center align-items-center mb-0" style="height:250px;">18/09</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col gx-0">
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
                                    <div class="accordion-body d-block text-center text-lg-start d-lg-flex">
                                        <img src="{{ asset('images/banner/foto-virada.jpeg') }}" width="375" class="img-fluid" />
                                        <div class="d-flex flex-column mt-2">
                                        <h3 class="ms-lg-4 brown-text font-18">Painel: Turismo com observação de baleias</h3>
                                        <p class="ms-lg-4 orange-font">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
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
                                    <button class="accordion-button collapsed font-7 orange-font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
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
                </div>

                {{--
                <table>
                    <thead class="d-flex list-unstyled text-white">
                        <th class="data1 p-5" onclick="openEvent('data1')">15/09</th>
                        <th class="data2 p-5" onclick="openEvent('data2')">16/09</th>
                        <th class="data3 p-5" onclick="openEvent('data3')">17/09</th>
                        <th class="data4 p-5" onclick="openEvent('data4')">18/09</th>
                    </thead>
                        <tbody>
                            <tr>
                                <td>
                            <div id="data1" class="text-white event-date">
                                <div class="accordion accordion-flush orange-font" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="brown-text" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Cordel do Fogo Encantado</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </td>
                    <tr>
                        <td>
                            <div id="data2" class="text-white event-date" style="display:none">
                                <div class="accordion accordion-flush orange-font" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="brown-text" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Cordel do Fogo Encantado</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </td>
                    <tr>
                        <td>
                            <div id="data3" class="text-white event-date" style="display:none">
                                <div class="accordion accordion-flush orange-font" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="brown-text" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Cordel do Fogo Encantado</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </td>
                    <tr>
                        <td>
                            <div id="data4" class="text-white event-date" style="display:none">
                                <div class="accordion accordion-flush orange-font" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="brown-text" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed orange-font" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="orange-border text-center p-2">16h</p>
                                            <p class="ms-3">Cordel do Fogo Encantado</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </td>
                        </tbody>
                    </table>
                    --}}
                        <div class="col-12 d-flex justify-content-center align-items-center pt-5 mt-5">
                            <a href="#" class="btn d-flex justify-content-center align-items-center text-white g-button">Reservar ingressos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="programacao bg-light pt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <p class="font-13 brown-text mb-5">Programação completa</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 gx-0">
                        <p class="data5 font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-top-left-radius:15px;">15/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data6 font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-left:4px solid orange">16/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data7 font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-right:4px solid orange;border-left:4px solid orange">17/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data8 font-9 d-flex justify-content-center align-items-center mb-0" style="height:120px;border-top-right-radius:15px;">18/09</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center shadow">
                    <div class="col gx-0">
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingFive">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Palestras
                                </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse show" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body p-5 text-white d-flex justify-content-between">
                                    @php
                                    $count = 3;
                                    @endphp
                                    @for($i = 0; $i < $count; $i++)
                                    <div class="d-none d-lg-block">
                                    <table class="pavilhao">
                                        <thead class="text-center">
                                            <th class="fw-lighter">Pavilhão B</th>
                                        </thead>
                                        <tbody>
                                            <tr class="d-flex flex-column">
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mt-4 mb-0">10h</p>
                                                    <p class="font-19 mt-4 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    @endfor

                                    <div class="three d-flex justify-content-center align-items-center flex-column d-block d-lg-none">
                                    <div class="swiper-wrapper">
                                        @for($i = 0; $i <= $count; $i++)
                                        <div class="swiper-slide">
                                    <table class="pavilhao">
                                        <thead class="text-center">
                                            <th class="fw-lighter">Pavilhão B</th>
                                        </thead>
                                        <tbody>
                                            <tr class="d-flex flex-column">
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mt-4 mb-0">10h</p>
                                                    <p class="font-19 mt-4 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex pavilion-item p-2 flex-row justify-content-between">
                                                    <p class="font-19 mb-0">10h</p>
                                                    <p class="font-19 mb-0">Cadastramento Oficial</p>
                                                </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                        @endfor
                                    </div>
                                    <img src="{{ asset('images/icons/swipe-right.svg') }}" class="img-fluid swipe-right2 mt-0 pt-2 d-block d-lg-none" />
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item orange-border-bottom">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingSix">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingSeven">
                                <button class="accordion-button font-7 collapsed brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center pt-5 mt-5 mb-5 pb-5">
                    <a href="#" class="btn d-flex justify-content-center align-items-center text-white g-button">Reservar ingressos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="local bg-light pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col gx-0 mb-4">
                        <p class="font-16 brown-text">Como chegar:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        <div class="row localization">
                        <div class="col-12 col-lg-7 m-2">
                        <p class="font-5 brown-text mb-3">Endereço</p>
                        <p class="lbrown" style="font-size:0.8em;">Av. Pedro Álvares Cabral - Vila Mariana,
                        São Paulo - SP, 04094-050</p>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        <div class="row metro">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Metrô</p>
                                <p class="font-7 lbrown mb-1">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="font-7 lbrown mb-1">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="font-7 lbrown mb-2">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <button class="btn btn-outline-success font-7">Ver mais linhas</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        <div class="row bus">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Ônibus</p>
                                <p class="font-7 lbrown mb-1">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="font-7 lbrown mb-1">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="font-7 lbrown mb-2">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <button class="btn btn-outline-success font-7">Ver mais linhas</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col d-flex align-items-start mb-5">
                        <div class="row park">
                            <div class="col m-2">
                                <p class="font-5 brown-text mb-3">Estacionamentos</p>
                                <p class="font-7 lbrown mb-1">Maxipark Fleury Ibirapuera</p>
                                <p class="font-7 lbrown mb-1">Maxipark Fleury Ibirapuera</p>
                                <p class="font-7 lbrown mb-2">Maxipark Fleury Ibirapuera</p>
                                <button class="btn btn-outline-success font-7">Ver mais</button>
                            </div>
                        </div>
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

function toggle(id){
    let element = document.getElementById(id);
    let element2 = document.getElementById('cartao')
    if(element.style.display === "block"){
        element.style.display = "none";
        element2.style.display = "block";

    }else{
        element.style.display = "block";
        element2.style.display = "none";
    }
}
</script>
@endsection
