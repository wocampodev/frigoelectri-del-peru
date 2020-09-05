<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Frigo <span>Electri</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="{{ route('service.index') }}" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>