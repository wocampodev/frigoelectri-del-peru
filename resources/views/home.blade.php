@extends('layout.template')

@section('styles')
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

@endsection

@section('content')
    
    @include('sections.main-hero')

    @include('sections.summary')

    @include('sections.banner')

    @include('sections.card-service')

    @include('sections.goals')

@endsection

@section('scripts')
    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{ asset('js/web/home.js') }}"></script>

@endsection