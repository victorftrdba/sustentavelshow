<header class="container py-2">

      <div class="row">
                <div class="col-1">
                    <a href="#">@include('layout.svg.logo')</a>
                  </div>
                  <div class="col-11 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg navbar-light" data-aos="fade-down">
                      <ul class="navbar-nav menu-desktop" style="font-size:0.95em">
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" aria-current="page" href="#" onclick="scrolldiv('card-slide')"><span class="brown-text">Palestrantes</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('programacao')"><span class="brown-text">Programação</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('tourism')"><span class="brown-text">Fóruns</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('integration-center')"><span class="brown-text">Centro de integração</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('oficinas')"><span class="brown-text">Oficinas</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('sustainablewear')"><span class="brown-text">Desfile</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link p-2 me-1" href="#" onclick="scrolldiv('virada')"><span class="brown-text">Virada sustentável</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-center text-white rounded-border g-button p-2 me-1" href="#" style="width:160px">Seja um expositor</a>
                        </li>
                      </ul>
                      <a class="btn navbar-toggler bg-light p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" id="navbarSideCollapse" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </a>
            </nav>
          </div>

        <div class="col-12">
          <div class="offcanvas w-100 h-100 brown-background offcanvas-start offcanvas-collapse" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" >
            <button type="button" class="btn w-25 rounded-border g-button ms-2 mt-2 fw-bold text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
              <span class="text-white">FECHAR</span>
            </button>
            <ul class="d-flex list-unstyled justify-content-center align-items-center flex-column">
        <li class="nav-item mt-3">
            <a class="nav-link text-white mb-3" aria-current="page" href="#" onclick="scrolldiv('card-slide')">Palestrantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('programacao')">Programação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('tourism')">Fóruns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('integration-center')">Centro de integração</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('oficinas')">Oficinas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('sustainablewear')">Desfile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mb-3" href="#" onclick="scrolldiv('virada')">Virada sustentável</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-white rounded-border g-button p-2 me-1" href="#" style="width:160px">Seja um expositor</a>
          </li>
          <li>
            <a class="nav-link text-center" href="#">@include('layout.svg.footer')</a>
          </li>
        </ul>
        </div>
      </div>
        </div>
</header>
