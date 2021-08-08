@extends('layout.app')

@section('content')

<section class="hero">
<div class="container-fluid justify-content-center align-items-center mb-5">
    <div class="row">
        <div class="col text-white py-5" style="background-size:cover;background-image: url({{ asset('images/banner/banner-home.jpg') }})">
            <p class="fs-padrao text-center mb-0 my-5">
                Parque Ibirapuera - São Paulo
            </p>
            <p class="fs-padrao text-center">
                15 a 18 de setembro de 2022
            </p>
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
            <div class="text-center">
                <button class="btn text-white botao-verde p-2 w-lg-25 my-5">Seja um dos 180 expositores</button>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <div class="row py-3">
                <div class="col d-flex order-0 order-lg-0 justify-content-center">
                    <img src="{{ asset('images/banner/foto-proposito.jpg') }}" class="img-size borda-redonda" />
                </div>
                <div class="col ms-lg-5 d-flex order-1 order-lg-1 justify-content-center align-items-center align-items-lg-start flex-column">
                    <h2 class="fs-grande text-center text-lg-start destaque-marrom">Propósito</h2>
                    <p class="fs-padrao text-center text-lg-start texto-cinza">A inclusão através do conhecimento, o desenvolvimento
                        sustentável e o consumo consciente. Expor novos hábitos,
                        boas práticas, soluções e tecnologias inovadoras para que
                        a sustentabilidade seja incorporada nas atividades
                        cotidianas da sociedade.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-12">
            <div class="row py-5">
                <div class="col order-0 order-lg-1 d-flex justify-content-center">
                    <img src="{{ asset('images/banner/foto-evento.jpg') }}" class="img-size borda-redonda" />
                </div>
                <div class="col me-lg-5 order-1 order-lg-0 d-flex justify-content-center align-items-center align-items-lg-start flex-column">
                    <h2 class="fs-grande text-center text-lg-start destaque-marrom">Evento</h2>
                    <p class="fs-padrao text-center text-lg-start texto-cinza">Ao longo de 4 dias, com exposição, 12 fóruns
                        temáticos, painéis de dicussão, oficinas, desfile, espaço infância e
                        ações de responsabilidade social, o Sustentável Show será o mais
                        completo evento de sustentabilidade do país.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="card-slide">
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="fs-media destaque-marrom">Palestrantes confirmados</h2>
            </div>
            <div class="col-12 justify-content-end d-flex mb-2">
                <div class="prev me-5 fs-grande">@include('layout.svg.seta-marrom')</div>
                <div class="next me-5 fs-grande seta">@include('layout.svg.seta-marrom')</div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                <!-- Slider main container -->
                <div class="swiper-container d-flex justify-content-center align-items-center">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card borda-redonda">
                            <img class="speakers img-fluid borda-redonda rounded-bottom" src="{{ asset('images/speakers/palestrante-1.jpg') }}" alt="Card image cap">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Lar & Horta</p>
                                <p class="fs-media">Sebastião Salgado</p>
                                </div>
                            <div class="card-body text-white order-0">
                                <h5 class="card-title fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                                <p class="card-text fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card borda-redonda">
                            <img class="speakers img-fluid borda-redonda rounded-bottom" src="{{ asset('images/speakers/palestrante-2.jpg') }}" alt="Card image cap">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Lar & Horta</p>
                                <p class="fs-media">Fernanda Marcondes</p>
                                </div>
                            <div class="card-body text-white order-0">
                                <h5 class="card-title fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                                <p class="card-text fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card borda-redonda">
                            <img class="speakers img-fluid borda-redonda rounded-bottom" src="{{ asset('images/speakers/palestrante-3.jpg') }}" alt="Card image cap">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                            <p class="mb-0">Fórum Ecocidade</p>
                            <p class="fs-media">Arthur Alvez Pereira</p>
                            </div>
                              <div class="card-body text-white order-0">
                                <h5 class="card-title fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                                <p class="card-text fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card borda-redonda">
                            <img class="speakers img-fluid borda-redonda rounded-bottom" src="{{ asset('images/speakers/palestrante-4.jpg') }}" alt="Card image cap">
                            <div class="text-white calendar-speaker">
                                <p class="mb-0">16/09</p>
                                <p>14:30h</p>
                            </div>
                            <div class="text-white info-speaker">
                                <p class="mb-0">Fórum Ar</p>
                                <p class="fs-media">Paula Fernandes</p>
                                </div>
                            <div class="card-body text-white order-0">
                                <h5 class="card-title fs-padrao">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                                <p class="card-text fs-pequena">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores velit reprehenderit repudiandae quis!</p>
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
    <div class="container-fluid justify-content-center align-items-center">
        <div class="row py-5 justify-content-center align-items-center" style="background-size:cover;background-image: url({{ asset('images/banner/forum-turismo.jpg') }})">
            <div class="col-12 col-lg-3 justify-content-start align-items-center text-white d-flex">
                <h2>Fóruns</h2>
            </div>
            <div class="col-12 col-lg-9 d-none d-lg-flex justify-content-end align-items-center text-white">
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
                <a class="p-2 slide-item text-reset text-decoration-none">Turismo</a>
            </div>
            <div class="col-12 d-flex d-lg-none justify-content-start align-items-center">
                <select>
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
            <div class="col-10 py-5">
                @include('layout.svg.icone-turismo')
            </div>
            <div class="col-10 mb-5">
                <h2 class="fs-grande text-white">
                    Fórum Turismo
                </h2>
            </div>
            <div class="col-10 mb-3 text-white">
                <p class="borda-laranja mb-0 text-center py-1">16/09</p>
                <p class="borda-laranja text-center py-1">14:30h</p>
            </div>
            <div class="col-10 mb-3 text-white">
                <h2>Painel: Turismo com observação de baleias</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel magnam dolorem provident ex. Blanditiis, velit, fugiat ducimus tempore esse possimus eum alias fugit soluta nam expedita dignissimos, sunt consectetur incidunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quos eos! Totam deleniti exercitationem molestiae quidem quisquam laborum? Nisi omnis non recusandae hic laudantium ullam consectetur fugiat quaerat rem magnam?</p>
            </div>
            <div class="col-10 py-5">
                <a href="#" class="btn rounded p-3 w-lg-25 text-white botao-verde">Inscreva-se agora</a>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="container-fluid mb-5">
    <div class="row background-green py-5 justify-content-center align-items-center">
        <div class="col-12 text-white">
            @include('layout.svg.greenbars')
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
                    <a href="#" class="ms-lg-5 text-nowrap text-white">Ofereça uma atividade</a>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-white py-5">
            <h2 class="fs-media destaque-marrom">Oficinas oficiais</h2>
        </div>
        <div class="col-12 py-5 d-flex justify-content-center align-items-center flex-column">
                <a href="#" class="btn rounded w-lg-25 text-white botao-verde">Ofereça uma oficina</a>
        </div>
    </div>
</div>
</section>

@endsection
