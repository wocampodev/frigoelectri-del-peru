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
    <link rel="stylesheet" href="{{ asset('vendor/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>New Tab</title>

</head>
    <body>

        @include('sections.wrap')
        
        @include('sections.navbar')

        @include('sections.main-hero')

        @include('sections.summary')

        @include('sections.banner')

        @include('sections.card-services')

        @include('sections.goals')

        @include('sections.feedback')
            
        @include('sections.gallery')

        @include('sections.blog')

        @include('sections.contact')

        @include('sections.footer')

        
    

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
    <script src="{{ asset('vendor/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('vendor/js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>