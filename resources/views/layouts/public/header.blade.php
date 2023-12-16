<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('home') }}" rel="tooltip" title="{{ env('APP_NAME') }}"
            data-placement="bottom" target="_blank">
            {{ env('APP_NAME') }}
        </a>
        <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="navbar-item">
                    <div class="row">
                        <div class="col-auto">
                            <div class="bg-white border-radius-lg d-flex me-2">
                                <input type="text" class="form-control border-0 ps-3"
                                    placeholder="Pesquisar imóveis">
                                <button class="btn bg-gradient-primary my-1 me-1">Buscar</button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="navbar-item">
                    <a class="btn btn-outline-primary my-1 me-1" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
                <li class="navbar-item">
                    <a class="btn btn-outline-primary my-1 me-1" href="{{ route('register') }}">
                        <i class="far fa-user"></i> Cadastre-se
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
