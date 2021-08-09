@extends('layout.app')

@section('content')

<section class="hero">
<div class="container-fluid">
    <div class="row text-white justify-content-center align-items-center flex-column py-5" style="background-size:cover;background-image: url({{ asset('images/banner/banner-home.jpg') }})">
        <div class="col py-3 mb-0">
            <p class="fs-padrao text-center mb-0">
                Parque Ibirapuera - São Paulo
            </p>
            <p class="fs-padrao text-center">
                15 a 18 de setembro de 2022
            </p>
        </div>
        <div class="col-8">
            <p class="fs-grande text-center mb-5">
                O mais completo evento de sustentatibilidade
                começa em
            </p>
            <div class="timer d-flex justify-content-center text-center fs-media fw-bold mb-5">
                <div id="dias"></div>
                <div class="vertical me-2 ms-2 ms-lg-4"></div>
                <div id="horas"></div>
                <div class="vertical me-2 ms-2 ms-lg-4"></div>
                <div id="minutos"></div>
                <div class="vertical me-2 ms-2 ms-lg-4"></div>
                <div id="segundos"></div>
            </div>
        </div>
        <div class="col-3 py-3 d-flex justify-content-center text-center align-items-center">
            <div class="text-center">
                <button class="btn d-flex text-white w-100 rounded botao-verde my-5 p-3">Seja um dos 180 expositores</button>
            </div>
        </div>
    </div>
</div>
</section>

<section class="propevent">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 my-5">
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
                    <div class="row justify-content-center align-items-center py-5">
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

<section class="card-slide">
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center">
            <div class="col-10">
                <div class="row">
            <div class="col-12">
                <h2 class="fs-media destaque-marrom" style="font-size:1.8em;">Palestrantes confirmados</h2>
            </div>
            <div class="col-12 justify-content-end d-flex mb-2">
                <div class="prev me-5 fs-grande">@include('layout.svg.seta-marrom')</div>
                <div class="next me-5 fs-grande seta">@include('layout.svg.seta-marrom')</div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                <!-- Slider main container -->
                <div class="swiper-container one d-flex justify-content-center align-items-center">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-1.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Lar & Horta</p>
                                <p class="fs-media">Sebastião Salgado</p>
                            </div>
                                <div class="speaker-content text-white p-lg-2 ps-lg-4">
                                    <h2 class="fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                                    <p class="fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                                </div>
                            </div>
                        </div>            
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-2.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Lar & Horta</p>
                                <p class="fs-media">Fernanda Marcondes</p>
                            </div>
                                <div class="speaker-content text-white p-lg-2 ps-lg-4">
                                    <h2 class="fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                                    <p class="fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                                </div>
                            </div>
                        </div>                  
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-3.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Ecocidade</p>
                                <p class="fs-media">Arthur Alvez Pereira</p>
                            </div>
                                <div class="speaker-content text-white p-lg-2 ps-lg-4">
                                    <h2 class="fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                                    <p class="fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                                </div>
                            </div>
                        </div>      
                        <div class="swiper-slide d-flex">
                            <div class="speaker-card" style="background-image: url({{ asset('images/speakers/palestrante-4.jpg') }});">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Ar</p>
                                <p class="fs-media">Paula Fernandes</p>
                            </div>
                                <div class="speaker-content text-white p-lg-2 ps-lg-4">
                                    <h2 class="fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                                    <p class="fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
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

<section>
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center" style="background-size:cover;background-image: url({{ asset('images/banner/forum-turismo.jpg') }})">
            <div class="col-10">
                <div class="row justify-content-center align-items-center">
            <div class="col-1 d-flex justify-content-center align-items-center text-white">
                <h2>Fóruns</h2>
            </div>
            <div class="col-11 d-none d-lg-flex justify-content-end align-items-center text-white" style="font-size:0.8em;">
                <a class="p-2 slide-item text-reset text-decoration-none">Ar</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Água</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Alimento</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Energia</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Reciclagem</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Lar&Horta</a>
                <a class="p-2 slide-item text-reset text-decoration-none">CuidadoPet</a>
                <a class="p-2 slide-item text-reset text-decoration-none">EcoCidade</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Esporte</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Moda&Beleza</a>
                <a class="p-2 slide-item text-reset text-decoration-none">Mobilidade</a>
                <a class="p-2 slide-item text-reset text-decoration-none menu-ativo">Turismo</a>
            </div>
            <div class="col-12 d-flex d-lg-none justify-content-center align-items-center">
                <select class="form-control w-50">
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Ar</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Água</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Alimento</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Energia</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Reciclagem</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Lar&Horta</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">CuidadoPet</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">EcoCidade</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Esporte</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Moda&Beleza</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Mobilidade</a>
                    </option>
                    <option>
                        <a class="p-2 slide-item text-reset text-decoration-none">Turismo</a>
                    </option>
                </select>
            </div>
        </div>
            <div class="row justify-content-center align-items-center">
            <div class="col-10 py-5">
                @include('layout.svg.icone-turismo')
            </div>
            <div class="col-10 mb-5">
                <p class="fs-xgrande text-white">
                    Fórum Turismo
                </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
            <div class="col-10 mb-3 text-white">
                <p class="borda-laranja mb-0 text-center py-1">16/09</p>
                <p class="borda-laranja text-center py-1">14:30h</p>
            </div>
            <div class="col-10 mb-3 text-white">
                <p style="font-size:1.8em">Painel: Turismo com observação de baleias</p>
                <p class="less-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel magnam dolorem provident ex. Blanditiis, velit, fugiat ducimus tempore esse possimus eum alias fugit soluta nam expedita dignissimos, sunt consectetur incidunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quos eos! Totam deleniti exercitationem molestiae quidem quisquam laborum? Nisi omnis non recusandae hic laudantium ullam consectetur fugiat quaerat rem magnam?</p>
            </div>
            <div class="col-10 py-5">
                <a href="#" class="btn rounded p-3 w-lg-25 text-white botao-verde">Inscreva-se agora</a>
            </div>
        </div>
    </div>
</div>
                    </div>
            </div>
</div>
</section>

<section class="integration-center">
<div class="container-fluid background-green">
    <div class="row py-5 justify-content-center align-items-center" style="height:200%">
        <div class="col-12 text-white">
            <h2 class="fs-media">Centro de Integração</h2>
        </div>
        <div class="col-10 py-5 text-white d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <p class="fs-grande">Mão na massa</p>
                    <p class="fs-media mb-3">Painéis, oficinas e espaços com atividades</p>
                    <p class="mb-5">
                        Nunc metus purus, auctor a pharetra et, suspicit vel odio. Aenean
                        luctus dapibus auctor. Sed non lacus a erat vestibulum consequat.
                        Nunc quis odio ut magna lobortis porttitor. Integer condimentum elit
                        lectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt provident consequatur vitae? Ex distinctio, architecto eum libero porro consectetur corrupti similique molestiae consequatur, totam rem. Nemo natus exercitationem eligendi voluptatum.
                    </p>
                    <a href="#" class="btn text-white p-lg-3 w-50 p-1 borda-redonda w-lg-50 text-center fundo-marrom">Inscreva-se agora</a>
                    <a href="#" class="ms-lg-5 text-nowrap text-white mb-5">Ofereça uma atividade</a>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="accordion">
                        <section class="accordion-item mb-3 rounded">
                            <h1 class="fs-media">Espaço Paz</h1>
                            <div class="accordion-item-content">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi doloribus, quam id delectus labore assumenda perferendis consequuntur, reiciendis exercitationem, vero debitis! Cupiditate nulla corporis sunt dolore nesciunt possimus recusandae ad.</p>
                            </div>
                        </section>
                        <section class="accordion-item mb-3 rounded">
                            <h1 class="fs-media">Colabora</h1>
                            <div class="accordion-item-content">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde veritatis ullam ut nisi quasi ipsa suscipit voluptatum iure officiis, eius voluptatem. Fuga itaque soluta hic tempora odio unde ducimus?</p>
                            </div>
                        </section>
                        <section  class="accordion-item mb-3 rounded">
                            <h1 class="fs-media">Centro de Negócios</h1>
                            <div class="accordion-item-content">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consectetur molestiae recusandae natus possimus earum sunt voluptatibus rem. Molestias, eius omnis totam asperiores dolore dolor! Qui laudantium voluptatum facilis a?</p>
                            </div>
                        </section>
                        <section class="accordion-item mb-3 rounded">
                            <h1 class="fs-media">Espaço Infância</h1>
                            <div class="accordion-item-content">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, temporibus sequi cum ex nostrum neque aliquid reiciendis. Beatae, neque ipsum velit architecto ipsa, enim voluptas quis ab error libero cum?</p>
                            </div>
                        </section>
                        <section class="accordion-item mb-3 rounded">
                            <h1 class="fs-media">Espaço Painel</h1>
                            <div class="accordion-item-content">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat iure distinctio, et, consectetur iste corrupti rem voluptas doloremque voluptatum sapiente est dignissimos dolores reprehenderit, perspiciatis laudantium repudiandae quibusdam ullam. Explicabo?</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-12 text-white py-5">
            <h2 class="fs-media destaque-marrom">Oficinas oficiais</h2>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center py-5">
            <!-- Slider main container -->
            <div class="swiper-container two d-flex justify-content-center align-items-center">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="150" class="img-fluid" src="{{ asset('images/enterprises/logo-1.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-0">A energia 100% renovável é só o começo</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, a harum.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="150" class="img-fluid" src="{{ asset('images/enterprises/logo-2.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-0">A energia 100% renovável é só o começo</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, a harum.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="150" class="img-fluid" src="{{ asset('images/enterprises/logo-3.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-0">A energia 100% renovável é só o começo</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, a harum.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card enterprise-card d-flex justify-content-center flex-column">
                        <img width="150" class="img-fluid" src="{{ asset('images/enterprises/logo-4.png') }}"/>
                        <div class="enterprise-content mb-5 p-3">
                            <p class="destaque-marrom fs-pequena mb-0">18/09 - Espaço Painel</p>
                            <p class="destaque-marrom mb-0">A energia 100% renovável é só o começo</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, a harum.</p>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="two-prev">@include('layout.svg.seta-fundo-marrom')</div>
                <div class="two-next">@include('layout.svg.seta-fundo-marrom')</div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center flex-column my-5">
                <a href="#" class="btn rounded w-lg-25 text-white botao-verde">Ofereça uma oficina</a>
        </div>
    </div>
</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center text-white" style="background-size:cover;background-image:url({{ asset('images/banner/foto-sustainablewear.jpg') }})">
            <div class="col-10">
                @include('layout.svg.farm-logo')
                <p>apresenta</p>
            </div>
            <div class="col-10 mb-5">
                <h2 class="fs-xgrande text-white">
                    Sustainablewear
                </h2>
            </div>
            <div class="col-10 mb-3 text-white">
                <p class="borda-laranja mb-0 text-center py-1">16/09</p>
                <p class="borda-laranja text-center py-1">14:30h</p>
            </div>
            <div class="col-10 mb-3 text-white">
                <h2>Mais que um desfile, um manifesto</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel magnam dolorem provident ex. Blanditiis, velit, fugiat ducimus tempore esse possimus eum alias fugit soluta nam expedita dignissimos, sunt consectetur incidunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quos eos! Totam deleniti exercitationem molestiae quidem quisquam laborum? Nisi omnis non recusandae hic laudantium ullam consectetur fugiat quaerat rem magnam?</p>
            </div>
            <div class="col-10 py-5">
                <a href="#" class="btn rounded p-3 w-lg-25 text-white botao-verde">Reserve sua cadeira</a>
            </div>
        </div>
    </div>
</section>

<section class="sustainableshow">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="background-size:cover;background-image: url({{ asset('images/banner/banner-virada.jpg') }})">
            <div class="col-10 text-white">
                @include('layout.svg.farm-logo')
                <p>apresenta</p>
            </div>
            <div class="col-10 mb-5">
                <h2 class="fs-xgrande text-warning">
                    Virada Sustentável Show
                </h2>
            </div>
            <div class="col-10 mb-5 text-white">
                <h2 class="mb-5">Fechando com inspiração e celebração</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel magnam dolorem provident ex. Blanditiis, velit, fugiat ducimus tempore esse possimus eum alias fugit soluta nam expedita dignissimos, sunt consectetur incidunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quos eos! Totam deleniti exercitationem molestiae quidem quisquam laborum? Nisi omnis non recusandae hic laudantium ullam consectetur fugiat quaerat rem magnam?</p>
            </div> 
                <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                <ul class="d-flex list-unstyled text-white">
                    <li class="data1 p-5 fs-xgrande" onclick="openEvent('data1')">15/09</li>
                    <li class="data2 p-5 fs-xgrande" onclick="openEvent('data2')">16/09</li>
                    <li class="data3 p-5 fs-xgrande" onclick="openEvent('data3')">17/09</li>
                    <li class="data4 p-5 fs-xgrande" onclick="openEvent('data4')">18/09</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="event-accordion">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div id="data1" class="text-white event-date">
                        
                        <div class="accordion accordion-flush w-100" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Painel: Turismo com observação de baleias
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Grupo de Teatro Somos Show
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Cordel do Fogo Encantado
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div id="data2" class="text-white event-date" style="display:none">

                    </div>

                    <div id="data3" class="text-white event-date" style="display:none">
                        
                    </div>

                    <div id="data4" class="text-white event-date" style="display:none">
                        
                    </div>
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
</script>
@endsection
