@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <div class="container mb-5">
        <div class="row pt-5">
            <div class="col-md-6">
                <h3 class="text-primary">Misión</h3>
                <p style="text-align: justify;">Ser la primera empresa en la zona norte brindando un servicio en venta, reparación de equipos electromecánicos y proyectos. Brindando garantía en todos nuestros servicios.</p>
            </div>
            <div class="col-md-6">
                <h3 class="text-primary">Visión</h3>
                <p style="text-align: justify;">Brindar a nuestros clientes, servicios de alta calidad y confiabilidad brindándoles garantía a costos de acuerdo al mercado.De acuerdo a las exigencias del mercado competido ser líder  y cumpliendo con el cuidado del medio ambiente y ser una empresa altanamente amigable con el medio ambiente.</p>
            </div>
        </div>
        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-md-6">
                <img src="assets/images/services-8.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

@endsection