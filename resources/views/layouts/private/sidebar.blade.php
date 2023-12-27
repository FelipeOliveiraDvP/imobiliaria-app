<aside class="sidenav navbar navbar-light navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <i class="fas fa-city"></i>
            <span class="ms-3 font-weight-bold">{{ env('APP_NAME') }}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-100 w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('usuarios') ? 'active' : '' }}" href="{{ route('users') }}">
                    <i class="fas fa-users"></i>
                    <span class="nav-link-text ms-1">Usuários</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('imobiliarias') ? 'active' : '' }}"
                    href="{{ route('real-estates') }}">
                    <i class="fas fa-building"></i>
                    <span class="nav-link-text ms-1">Imobiliárias</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('clientes') ? 'active' : '' }}" href="{{ route('customers') }}">
                    <i class="fas fa-user-tag"></i>
                    <span class="nav-link-text ms-1">Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('imoveis') ? 'active' : '' }}" href="{{ route('properties') }}">
                    <i class="fas fa-home"></i>
                    <span class="nav-link-text ms-1">Imóveis</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('propostas') ? 'active' : '' }}" href="{{ route('proposals') }}">
                    <i class="fas fa-handshake"></i>
                    <span class="nav-link-text ms-1">Propostas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contratos') ? 'active' : '' }}" href="{{ route('contracts') }}">
                    <i class="fas fa-file-signature"></i>
                    <span class="nav-link-text ms-1">Contratos</span>
                </a>
            </li>

            {{-- <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Laravel Examples</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user-profile') ? 'active' : '' }} " href="{{ url('user-profile') }}">
                    <i class="far fa-user"></i>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li> --}}
        </ul>
        <div class="sidenav-footer mx-3 mt-3">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background"
                    style="background-image: url('../assets/img/curved-images/white-curved.jpeg')">
                </div>
                <div class="card-body text-start p-3 w-100">
                    <div
                        class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                        <i class="fas fa-laptop-code text-dark text-gradient text-lg top-0"></i>
                    </div>

                    <div class="docs-info">
                        <h6 class="text-white up mb-0">Precisa de ajuda?</h6>
                        <p class="text-xs font-weight-bold">Entre em contato com o desenvolvedor</p>
                        <a href="https://portifolio.foliveira.dev.br/" target="_blank"
                            class="btn btn-white btn-sm w-100 mb-0">Fale comigo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</aside>
