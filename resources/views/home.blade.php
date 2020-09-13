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
                //scrollLock: true,
                scrollLockDelay: 150,
                draggable: true,
                dots: '.carousel__indicators',
                arrows: {
                    prev: '.carousel__previous',
                    next: '.carousel__next'
                }
            });
        });
    </script>

@endsection