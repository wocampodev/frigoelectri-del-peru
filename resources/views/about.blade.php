@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <div class="container mb-5">
        <div class="row d-flex no-gutters align-items-stretch mt-3">
            <div class="col-12 col-lg-6 block__73422 order-lg-2 aos-init aos-animate" style="background-image: url('assets/images/services-8.jpg');" data-aos="fade-left" data-aos-delay=""></div>
            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="">
                {{-- <h2 class="mb-4 text-black">Misión</h2> --}}
                <h4 class="text-primary">Misión</h4>
                <p>Ser la primera empresa en la zona norte brindando un servicio en venta, reparación de equipos electromecánicos y proyectos. Brindando garantía en todos nuestros servicios.</p>
            </div>
        </div>
        <div class="row d-flex no-gutters align-items-stretch mt-3">
            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="">
                {{-- <h2 class="mb-4 text-black">Visión</h2> --}}
                <h4 class="text-primary">Visión</h4>
                <p>Ser la primera empresa en la zona norte brindando un servicio en venta, reparación de equipos electromecánicos y proyectos. Brindando garantía en todos nuestros servicios.</p>
            </div>
            <div class="col-12 col-lg-6 block__73422 order-lg-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay=""></div>
        </div>
    </div>

@endsection