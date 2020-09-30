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
    <link href="{{ asset('/assets/images/favicon.png') }}" rel="icon">
	<link href="{{ asset('/assets/images/favicon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/codecix.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" id="my-token">

    {{-- SEO --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'FrigoElectri del Perú')</title>

    <meta name="global" content="distribution">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Codecix">
    <meta name="title" content="FrigoElectri del Perú">
    
    <link rel="alternate" href="{{ env("APP_URL") }}" hreflang="x-default" />

    <meta name="description"content="Frigoelectri del Perú es un empresa con amplia experiencia en proyectos eléctricos, mantenimiento eléctrico y reparación de equipos. Brindamos garantía en todos nuestros servicios." />
    <meta name="keywords" content="frigoelectri, condensadores, compresores, mantenimiento, aire acondicionado, refrigerantes">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />

    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Frigoelectri del Perú: productos, servicios y proyectos eléctricos" />
    <meta property="og:description" content="Frigoelectri del Perú es un empresa con amplia experiencia en proyectos eléctricos, mantenimiento eléctrico y reparación de equipos. Brindamos garantía en todos nuestros servicios." />
    <meta property="og:url" content="{{ env("APP_URL") }}/" />
    <meta property="og:site_name" content="Frigoelectri del Perú: productos, servicios y proyectos eléctricos" />
    <meta property="article:modified_time" content="2020-06-27T15:05:42+00:00" />
    <meta property="og:image" content="{{ env("APP_URL") }}/assets/images/seo.png" />
    <meta property="og:image:width" content="4846" />
    <meta property="og:image:height" content="3431" />
    <meta name="twitter:card" content="summary_large_image" />

    <meta name="title" content="FrigoElectri del Perú">

    <link rel="canonical" href="{{url()->full()}}" />

    @yield('styles')
    
    <script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@graph":[
            {
                "@type" : "LocalBusiness",
                "image" : "{{ env("APP_URL") }}/assets/images/frigoelectridelperu-seo.png",
                "name": "FrigoElectri del Perú",
                "telephone" : [ "934466479" ],
                "address" : {
                    "@type" : "PostalAddress",
                    "streetAddress" : "Calle Los Lirios Mz. I Lote 07 A.H. Juan Noel Lastra",
                    "addressLocality" : "PAITA"
                },
                "url" : "http://www.frigoelectridelperu.com/",
                "aggregateRating" : {
                    "@type" : "AggregateRating",
                    "ratingValue": "5.0",
                "reviewCount": "11"
                }
            },
            {
                "@type": "WebSite",
                "url": "http://www.frigoelectridelperu.com/"
            }
        ]
    }        
    </script>

</head>
    <body>
        
        @include('sections.wrap')
        
        @include('sections.navbar')

            @yield('content')

        @include('sections.footer')

        <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/js/jquery-migrate-3.0.1.min.js') }}"></script>
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