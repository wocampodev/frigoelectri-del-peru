<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ url('/') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $messages['location'] }} <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">{{ $messages['greeting'] }}</h1>
            </div>
        </div>
    </div>
</section>