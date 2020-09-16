@extends('layout.template')

@section('content')
    
    @include('sections.main-hero')

    @include('sections.summary')

    @include('sections.banner')

    @include('sections.card-service')

    @include('sections.goals')

@endsection

{{-- @section('scripts')
    
    <script src="js/web/home.js"></script>

@endsection --}}