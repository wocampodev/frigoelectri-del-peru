<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/navbar.png') }}" alt="" class="img-fluid logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto" id="nav-listener">
                <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="/nosotros" class="nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="/servicios" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="/contacto" class="nav-link">Contacto</a></li>
            </ul>
            <div class="search-box-nav ml-auto">
                <form action="#" class="search-form">
                    <div class="form-group">
                        <span class="fa fa-search"></span>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Buscar servicio...">
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>