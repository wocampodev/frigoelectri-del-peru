<div class="carousel">
    <div class="carousel__container">
        <button aria-label="Anterior" class="carousel__previous">
            <i class="flaticon-confetti"></i>
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </button>

        <div class="carousel__list">
            <div class="carousel__element">
                <div class="hero-wrap" style="background-image: url('{{ asset('assets/images/slider-5.png') }}');" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <div class="col-md-6 ftco-animate">
                                <h1 class="mb-4">Somos Ingeniería, <br>Somos <span>Frigo</span> <span>Electri</span></h1>
                                <p><a href="{{ route('servicios.index') }}" class="btn btn-secondary mr-md-4 py-3 px-4">Nuestros servicios<span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel__element">
                <div class="hero-wrap" style="background-image: url('{{ asset('assets/images/slider-6.png') }}');" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <div class="col-md-6 ftco-animate">
                                <h1 class="mb-4">Somos Ingeniería, <br>Somos <span>Frigo</span> <span>Electri</span></h1>
                                <p><a href="{{ route('servicios.index') }}" class="btn btn-secondary mr-md-4 py-3 px-4">Nuestros servicios<span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel__element">
                <div class="hero-wrap" style="background-image: url('{{ asset('assets/images/slider-3.png') }}');" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <div class="col-md-6 ftco-animate">
                                <h1 class="mb-4">Somos Ingeniería, <br>Somos <span>Frigo</span> <span>Electri</span></h1>
                                <p><a href="{{ route('servicios.index') }}" class="btn btn-secondary mr-md-4 py-3 px-4">Nuestros servicios<span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button aria-label="Siguiente" class="carousel__next">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </button>
    </div>
    <div role="tablist" class="carousel__indicators my-3"></div>
</div>