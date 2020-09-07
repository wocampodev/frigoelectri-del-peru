<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/codecix.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" id="my-token">

    <title>Frigo Electri E.I.R.L</title>

</head>
    <body>
        
        @include('sections.navbar')

        @yield('content')

        @include('sections.footer')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

        <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('vendor/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('vendor/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('vendor/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/web/main.js') }}"></script>
        <script src="{{ asset('js/web/search.js') }}"></script>
        
        @yield('scripts')

    </body>
</html>