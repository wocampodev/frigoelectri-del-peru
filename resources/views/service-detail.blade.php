@extends('layout.template')

@section('content')

    @include('sections.hero-secondary')

    @include('sections.detail')
    
@endsection

@section('scripts')
    
    <script src="{{ asset('js/web/order.js') }}"></script>

@endsection