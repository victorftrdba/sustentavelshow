@extends('layout.app')

@section('content')

<section class="hero" style="padding-top:30px;padding-bottom:30px;background-size:cover;background-image: url({{ asset('images/banner/banner-home.jpg') }})">
<div class="container-fluid">
    <div class="row text-white flex-column justify-content-center align-items-center pb-5">
        <div class="col pt-5 mt-5">
            <p class="fs-padrao text-center mb-0">
                Parque Ibirapuera - São Paulo
            </p>
            <p class="fs-padrao text-center">
                15 a 18 de setembro de 2022
            </p>
        </div>
        <div class="col-8 text-center">
            <p style="font-size:3em;line-height:120%;">
                O mais completo evento de sustentatibilidade
                começa em
            </p>
            <div class="timer d-flex justify-content-center text-center fw-bold mt-5">
                <div id="dias"></div>
                <div class="vertical me-3 ms-lg-4"></div>
                <div id="horas"></div>
                <div class="vertical me-3 ms-lg-4"></div>
                <div id="minutos"></div>
                <div class="vertical me-3 ms-lg-4"></div>
                <div id="segundos"></div>
            </div>
        </div>
        <div class="col-3 d-flex justify-content-center text-center align-items-center pt-5 mt-5 pb-5 mb-5">
                <button class="btn botao-verde text-white">Seja um dos 180 expositores</button>
        </div>
    </div>
</div>
</section>

<section class="propevent mt-3 pt-5">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-10">
                <div class="row justify-content-center align-items-center py-5">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/banner/foto-proposito.jpg') }}" class="img-fluid borda-redonda" />
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-end flex-column">
                                <p class="fs-media text-center text-lg-start destaque-marrom mb-1" style="font-size:3em;">Propósito</p>
                                <p class="fs-padrao text-center text-lg-start texto-cinza" style="font-size:0.9em;line-height:150%;">A inclusão através do conhecimento, o desenvolvimento
                                    sustentável e o consumo consciente. Expor novos hábitos,
                                    boas práticas, soluções e tecnologias inovadoras para que
                                    a sustentabilidade seja incorporada nas atividades
                                    cotidianas da sociedade.</p>
                    </div>
                </div>
                    <div class="row justify-content-center align-items-center py-3 mb-3">
                        <div class="col-6 order-1 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/banner/foto-evento.jpg') }}" class="img-fluid borda-redonda" />
                        </div>
                        <div class="col-6 order-0 d-flex justify-content-center align-items-start flex-column">
                                <p class="fs-media text-center text-lg-start destaque-marrom mb-1" style="font-size:3em;">Evento</p>
                                <p class="fs-padrao text-center text-lg-start texto-cinza" style="font-size:0.9em;line-height:150%;">Ao longo de 4 dias, com exposição, 12 fóruns
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
                <h2 class="fs-media destaque-marrom" style="font-size:1.8em;">Palestrantes confirmados</h2>
            </div>
            <div class="col-12 justify-content-end d-flex">
                <div class="prev ms-5 fs-grande">@include('layout.svg.seta-marrom')</div>
                <div class="next ms-5 fs-grande seta">@include('layout.svg.seta-marrom')</div>
            </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5 p-4">
                <!-- Slider main container -->
                <div class="swiper-container one d-flex justify-content-center align-items-center">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-1.jpg') }});">
                                <div>
                                <div class="text-white calendar-speaker">
                                <p class="mb-0" style="font-size:1em;">16/09</p>
                                <p style="font-size:1em;">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0" style="font-size:1em;">Fórum Lar & Horta</p>
                                <p class="fs-grande mb-0" style="font-size:2.1em;line-height:100%">Sebastião</p>
                                <p class="fs-grande" style="font-size:2.1em;line-height:100%">Salgado</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="fs-padrao" style="font-size:0.9em;line-height:100%">Restaurando um bioma</h2>
                                    <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa, Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão, de 600 hectares de Aimorés, Minas Gerais.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-2.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0" style="font-size:1em;">76/09</p>
                                <p style="font-size:1em;">15:00h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0" style="font-size:1em;">Fórum Lar & Horta</p>
                                <p class="fs-grande mb-0" style="font-size:2.3em;line-height:100%">Fernanda</p>
                                <p class="fs-grande" style="font-size:2.3em;line-height:100%">Marcondes</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="fs-padrao" style="font-size:0.9em;line-height:100%">Projeto Tamar - Espécies bandeira</h2>
                                    <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-3.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0" style="font-size:1em;">16/09</p>
                                <p style="font-size:1em;">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0" style="font-size:1em;">Fórum Ecocidade</p>
                                <p class="fs-grande mb-0" style="font-size:2.3em;line-height:100%">Arthur Alvez</p>
                                <p class="fs-grande" style="font-size:2.3em;line-height:100%">Pereira</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="fs-padrao" style="font-size:0.9em;line-height:100%">A revolução do hiperadobe</h2>
                                    <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-4.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0" style="font-size:1em;">16/09</p>
                                <p style="font-size:1em;">14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0" style="font-size:1em;">Fórum Ar</p>
                                <p class="fs-grande mb-0" style="font-size:2.3em;line-height:100%">Paula</p>
                                <p class="fs-grande mb-0" style="font-size:2.3em;line-height:100%">Mendes</p>
                            </div>
                                <div class="speaker-content text-white mt-5 p-4">
                                    <h2 class="fs-padrao text-nowrap" style="font-size:0.9em;line-height:100%;">O rio nos céus que nasce na Amazônia</h2>
                                    <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat nulla non eros dignissim, a elementum ex tempus. Sed lacinia risus ut malesuada lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
        </div>
    </div>
</section>

<section class="tourism mt-5 pt-5" style="background-position:center;background-size:cover;background-image: url({{ asset('images/banner/forum-turismo.jpg') }})">
    <div class="container">
        <div class="row justify-content-center align-items-center text-white mb-3">
            <div class="col d-flex align-items-center" style="font-size:2em;">
                <p>Fóruns</p>
            </div>
            <div class="col d-flex align-items-center">
                <ul class="d-flex list-unstyled p-3" style="font-size:0.82em">
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
                    <div class="col-5 mb-5" style="font-size:5em">
                        <p style="line-height:100%;">Fórum Turismo</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="borda-laranja mb-0 p-1">16/09</p>
                        <p class="borda-laranja border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <p style="font-size:1.6em;">Painel: Turismo com observação de baleias</p>
                    </div>
                    <div class="col-9">
                        <p style="line-height:140%;">
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
                    <div class="col pb-5 mb-5 pt-5 mt-5">
                        <a href="#" class="btn botao-verde borda-redonda text-white">Inscreva-se agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="integration-center background-green pb-5 mb-5">
<div class="container pb-5 mb-5">
    <div class="row text-white mb-5">
        <div class="col pt-5" style="font-size:1.8em;">
            <p>Centro de Integração</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center pb-5">
        <div class="col-10 d-flex">
            <div class="row flex-column text-white">
                <div class="col-6 mb-4" style="font-size:5em;">
                    <p style="line-height:100%">Mão na massa</p>
                </div>
                <div class="col-12 mb-3">
                    <p style="font-size:1.4em;">Painéis, oficinas e espaços com atividades</p>
                </div>
                <div class="col-6 mb-5">
                    <p style="font-size:0.8em">
                        Nunc metus purus, auctor a pharetra et, suscipit vel odio.
                        Aenean luctus dapibus auctor. Sed non lacus a erat vestibulum consequat.
                        Nunc quis odio ut magna lobortis porttitor. Integer condimentum elit lectus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                        Sed lacinia risus ut malesuada lobortis.
                        Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                    </p>
                </div>
                <div class="col d-flex justify-content-start flex-column pb-5 mb-5">
                    <a href="#" class="btn d-flex justify-content-center align-items-center borda-redonda text-white">Inscreva-se agora</a>
                    <a href="#" class="text-white">Ofereça uma atividade</a>
                </div>
            </div>
            <div class="row mb-5 pb-5">
                <div class="col-12 cartoes d-flex flex-column text-white pb-5">

                    <a class="botao-verdeescuro cartao rounded-0 mb-3 text-reset text-decoration-none p-3"
                    onclick="toggle('divID1')" style="font-size:1.5em;">Espaço Paz</a>
                    <div id="divID1" onclick="toggle('divID1')">
                        <div class="cartao-3 mb-3 p-3">
                            <p class="mb-0" style="font-size:1.5em;z-index:3;">Centro de Negócios</p>
                            <p style="font-size:0.8em;z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="botao-verdeescuro cartao rounded-0 mb-3 text-reset text-decoration-none p-3"
                    onclick="toggle('divID2')" style="font-size:1.5em;">Colabora</a>
                    <div id="divID2">
                        <div class="cartao-3 mb-3 p-3" onclick="toggle('divID2')">
                            <p class="mb-0" style="font-size:1.5em;z-index:3;">Centro de Negócios</p>
                            <p style="font-size:0.8em;z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="botao-verdeescuro cartao rounded-0 mb-3 text-reset text-decoration-none p-3"
                    onclick="toggle('divID3')" style="font-size:1.5em;">Centro de Negócios</a>
                    <div id="divID3">
                        <div class="cartao-3 mb-3 p-3" onclick="toggle('divID3')">
                            <p class="mb-0" style="font-size:1.5em;z-index:3;">Centro de Negócios</p>
                            <p style="font-size:0.8em;z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="botao-verdeescuro cartao rounded-0 mb-3 text-reset text-decoration-none p-3"
                    onclick="toggle('divID4')" style="font-size:1.5em;">Espaço Infância</a>
                    <div id="divID4">
                        <div class="cartao-3 mb-3 p-3" onclick="toggle('divID4')">
                            <p class="mb-0" style="font-size:1.5em;z-index:3;">Centro de Negócios</p>
                            <p style="font-size:0.8em;z-index:3;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis.
                                Quisque massa enim, aliquet sit amet faucibus eget, molestie sit amet enim.
                            </p>
                        </div>
                    </div>

                    <a class="botao-verdeescuro cartao rounded-0 mb-3 text-reset text-decoration-none p-3"
                    onclick="toggle('divID5')" style="font-size:1.5em;">Espaço Painel</a>
                    <div id="divID5">
                        <div class="cartao-3 mb-3 p-3" onclick="toggle('divID5')">
                            <p class="mb-0" style="font-size:1.5em;z-index:3;">Centro de Negócios</p>
                            <p style="font-size:0.8em;z-index:3;">
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
    <div class="row mt-5 pt-5">
        <div class="col mb-5">
            <h2 class="fs-media destaque-marrom">Oficinas oficiais</h2>
        </div>
    </div>
    <div class="row">
        <div class="col mb-5 d-flex justify-content-center align-items-center">
            <div class="two d-flex justify-content-center align-items-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-1.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-3" style="font-size:1.17em;">A energia 100% renovável é só o começo</p>
                            <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-2.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-3" style="font-size:1.17em;">A energia 100% renovável é só o começo</p>
                            <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-3.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-3" style="font-size:1.17em;">A energia 100% renovável é só o começo</p>
                            <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="130" class="img-fluid mb-5" src="{{ asset('images/enterprises/logo-4.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-3">A energia 100% renovável é só o começo</p>
                            <p style="font-size:0.8em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur placerat nulla non eros dignissim, a elementum ex tempus.
                                Sed lacinia risus ut malesuada lobortis. </p>
                        </div>
                    </div>
                </div>
                <div class="two-prev p-4">@include('layout.svg.seta-fundo-marrom')</div>
                <div class="two-next p-4">@include('layout.svg.seta-fundo-marrom')</div>
            </div>
        </div>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-12 d-flex justify-content-center align-items-center flex-column my-5">
            <a href="#" class="btn text-white botao-verde">Ofereça uma oficina</a>
        </div>
    </div>
</div>
</section>

<section class="pt-5" style="background-size:cover;background-image:url({{ asset('images/banner/foto-sustainablewear.jpg') }})">
    <div class="container">
        <div class="row text-white justify-content-center pt-5 mt-5">
            <div class="col-10 d-flex justify-content-center">
                <div class="row text-white flex-column mb-5 pb-5">
                    <div class="col mb-3">
                        @include('layout.svg.farm-logo')
                        <p>apresenta</p>
                    </div>
                    <div class="col mb-5">
                        <p style="font-size:4em;">Sustainablewear</p>
                    </div>
                    <div class="col mb-3 text-center">
                        <p class="borda-laranja mb-0 p-1">16/09</p>
                        <p class="borda-laranja border-top-0 p-1">14:30h</p>
                    </div>
                    <div class="col">
                        <p style="font-size:1.65em;">Mais que um desfile, um manifesto</p>
                    </div>
                    <div class="col-10 mb-5 pb-5">
                        <p>
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
                    <div class="col-3 d-flex justify-content-start flex-column mb-5 pb-5">
                        <a href="#" class="btn rounded text-white botao-verde">Reserve sua cadeira</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="height:1200px;background-size:cover;background-image:url({{ asset('images/banner/banner-virada.jpg') }})">
    <div class="container">
        <div class="row justify-content-center align-items-center flex-column">
            <div class="col-10">
                <div class="row text-white">
                    <div class="col mb-5">
                        @include('layout.svg.redbull')
                        <p>apresenta</p>
                    </div>
                </div>
                <div class="row flex-column text-white">
                <div class="col-9 fonte-laranja mb-3">
                    <p style="line-height:100%;font-size:5em;">
                        Virada
                        Sustentável Show
                    </p>
                </div>
                <div class="col mb-3">
                    <p style="font-size:1.7em;">
                        Fechando com inspiração e celebração
                    </p>
                </div>
                <div class="col-8 mb-3">
                    <p style="font-size:1.05em;">
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

<section class="container-fluid">
    <div class="container mb-5 pb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column info-dates">

                                    <div class="col-12 shadow">
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 gx-0">
                        <p class="data1 d-flex justify-content-center align-items-center mb-0" style="font-size:3.5em;height:250px">15/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data2 d-flex justify-content-center align-items-center mb-0" style="font-size:3.5em;height:250px;">16/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data3 d-flex justify-content-center align-items-center mb-0" style="font-size:3.5em;height:250px;">17/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data4 d-flex justify-content-center align-items-center mb-0" style="font-size:3.5em;height:250px;">18/09</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col gx-0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item" style="border-bottom:3px solid orange">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingOne">
                                <button class="accordion-button collapsed fonte-laranja" style="font-size:0.8em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="d-flex align-items-center text-center">
                                    <p class="borda-laranja p-2">16h</p>
                                    <p class="ms-4">Painel: Turismo com observação de baleias</p>
                                </div>
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-bottom:3px solid orange">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingTwo">
                                <button class="accordion-button collapsed fonte-laranja" type="button" style="font-size:0.8em;" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <div class="d-flex align-items-center text-center">
                                    <p class="borda-laranja p-2">16h</p>
                                    <p class="ms-4">Grupo de Teatro Somos Show</p>
                                </div>
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-bottom:3px solid orange">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingThree">
                                <button class="accordion-button collapsed fonte-laranja" type="button" style="font-size:0.8em;" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <div class="d-flex align-items-center text-center">
                                    <p class="borda-laranja p-2">16h</p>
                                    <p class="ms-4">Nação Zumbi</p>
                                </div>
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingThree">
                                <button class="accordion-button collapsed fonte-laranja" type="button" style="font-size:0.8em;" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <div class="d-flex align-items-center text-center">
                                    <p class="borda-laranja p-2">16h</p>
                                    <p class="ms-4">Cordel do Fogo Encantado</p>
                                </div>
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
                                <div class="accordion accordion-flush fonte-laranja" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="destaque-marrom" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="borda-laranja text-center p-2">16h</p>
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
                                <div class="accordion accordion-flush fonte-laranja" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="destaque-marrom" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="borda-laranja text-center p-2">16h</p>
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
                                <div class="accordion accordion-flush fonte-laranja" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="destaque-marrom" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="borda-laranja text-center p-2">16h</p>
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
                                <div class="accordion accordion-flush fonte-laranja" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Painel: Turismo com observação de baleias</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex">
                                            <img src="{{ asset('images/banner/foto-virada.jpeg') }}" class="img-fluid mb-3" />
                                            <div class="ms-5 mt-3">
                                            <p class="destaque-marrom" style="font-size:1.3em;">Painel: Turismo com observação de baleias</p>
                                            <p style="font-size:0.8em;">Como o fotógrafo brasileiro Sebastião Salgado e sua esposa,
                                            Lélia Wanick, decidiram reanimar o verde de seu pedaço de terra - a fazenda Bulcão,
                                            de 600 hectares de Aimorés, Minas Gerais.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <p class="borda-laranja text-center p-2">16h</p>
                                            <p class="ms-3">Grupo de Teatro Somos Show</p>
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fonte-laranja" style="font-size:0.7em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <p class="borda-laranja text-center p-2">16h</p>
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
                        <div class="col-12 text-center pt-5 mt-5">
                            <a href="#" class="btn rounded text-white botao-verde">Reservar ingressos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="programacao bg-light pt-5 mt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <p class="fs-media destaque-marrom mb-5">Programação completa</p>
                    </div>
                </div>
            </div>
            <div class="col-12 shadow">
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 gx-0">
                        <p class="data5 d-flex justify-content-center align-items-center mb-0" style="font-size:2em;height:120px;border-top-left-radius:15px;">15/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data6 d-flex justify-content-center align-items-center mb-0" style="font-size:2em;height:120px;border-left:3px solid orange">16/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data7 d-flex justify-content-center align-items-center mb-0" style="font-size:2em;height:120px;border-right:3px solid orange;border-left:3px solid orange">17/09</p>
                    </div>
                    <div class="col-3 gx-0">
                        <p class="data8 d-flex justify-content-center align-items-center mb-0" style="font-size:2em;height:120px;border-top-right-radius:15px;">18/09</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col gx-0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item" style="border-bottom:3px solid orange">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingOne">
                                <button class="accordion-button collapsed destaque-marrom" style="font-size:0.8em;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Palestras
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-bottom:3px solid orange">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingTwo">
                                <button class="accordion-button collapsed destaque-marrom" type="button" style="font-size:0.8em;" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Centro de Integração
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-3 pb-3" id="flush-headingThree">
                                <button class="accordion-button collapsed destaque-marrom" type="button" style="font-size:0.8em;" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Fóruns
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center pt-5 mt-5 mb-5 pb-5">
                    <a href="#" class="btn rounded text-white botao-verde">Reservar ingressos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <p class="destaque-marrom mb-3" style="font-size:1.5em;">Como chegar:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        @include('layout.svg.localization')
                        <div class="row">
                        <div class="col-7 m-2">
                        <p class="destaque-marrom mb-3" style="font-size:1.2em;">Endereço</p>
                        <p class="marrom-claro" style="font-size:0.8em;">Av. Pedro Álvares Cabral - Vila Mariana,
                        São Paulo - SP, 04094-050</p>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        @include('layout.svg.metro')
                        <div class="row">
                            <div class="col m-2">
                                <p class="destaque-marrom mb-3" style="font-size:1.2em;">Metrô</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">175T/10 Metrô Santana – Metrô Jabaquara</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">175T/10 Metrô Santana – Metrô Jabaquara</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        @include('layout.svg.bus')
                        <div class="row">
                            <div class="col m-2">
                                <p class="destaque-marrom mb-3" style="font-size:1.2em;">Ônibus</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">5391/10 Jd. Ângela - Lgo. São Francisco</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-start mb-3">
                        @include('layout.svg.park')
                        <div class="row">
                            <div class="col m-2">
                                <p class="destaque-marrom mb-3" style="font-size:1.2em;">Estacionamentos</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">Maxipark Fleury Ibirapuera</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">Maxipark Fleury Ibirapuera</p>
                                <p class="marrom-claro mb-0" style="font-size:0.8em;">Maxipark Fleury Ibirapuera</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14410.81960021496!2d-49.29428415!3d-25.448127649999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1628703997804!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
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
    if(element.style.display === "block"){
        element.style.display = "none";
    }else{
        element.style.display = "block";
    }
}
</script>
@endsection
