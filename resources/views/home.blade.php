@extends('layout.template')

@section('content')
    
    @include('sections.main-hero')

    @include('sections.summary')

    @include('sections.banner')

    @include('sections.card-service')

    @include('sections.goals')

@endsection

@section('scripts')
    
    <script>
        window.addEventListener('load', function(){
            new Glider(document.querySelector('.carousel__list'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                scrollLock: true,
                draggable: true,
                dots: '.carousel__indicators',
                arrows: {
                    prev: '.carousel__previous',
                    next: '.carousel__next'
                },
                /* responsive: [
                    {
                    // screens greater than >= 775px
                    breakpoint: 450,
                    settings: {
                        // Set to `auto` and provide item width to adjust to viewport
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },{
                    // screens greater than >= 1024px
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                    }
                ] */
            });
        });
    </script>

@endsection