<section class="ftco-section ftco-intro" style="background-image: url({{ asset('assets/images/bg-inicioservicios.jpg') }});">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <h2>Nuestros Servicios</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="d-block services">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-technical"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ $service->name }}</h3>
                            <p>{{ $service->short_description }}</p>
                            <a href="{{ url("./servicios/{$service->slug}") }}" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Ver servicio</i></a>
                        </div>
                    </div>      
                </div>
            @endforeach
        </div>
        <div class="row d-flex justify-content-center card-service-home">
            <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                <a href="{{ route('servicios.index') }}" class="btn btn-secondary btn-view-services mx-auto">Ver todos</a>
            </div>
        </div>
    </div>
</section>