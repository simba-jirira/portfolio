<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="web solutions,web development services,website services,build a website,web agency,freelance website designer,web design services,good website design,web design, ecommerce website,"/>
    <meta name="author" content="Simba Jirira"/>
    <meta name="robots" content=""/>
    <meta name="description" content="Simba Jirira -  Freelance Website Designer / Developer - Branding"/>
    <meta property="og:title" content="Simba Jirira - Freelance Website Designer / Developer - Branding"/>
    <meta property="og:description" content="Simba Jirira - I am a freelance website developer / designer who specialises in creating website for startups to medium sized businesses, and i also do branding"/>
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{ $title ?? 'Simba Jirira - Freelance Website Designer / Developer' }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Stylesheet -->
    <link href="{{ asset('vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/lightgallery/css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link class="skin" rel="stylesheet" href="{{ asset('css/skin/skin-2.css') }}">
    @livewireStyles


</head>
<body id="bg">
<div id="loading-area" class="loading-01"></div>
<div class="page-wraper">
    <!-- Header -->
    @include('layouts.partials.header')
    <!-- Header End -->

    {{$slot}}

    <!-- Footer -->
    @include('layouts.partials.footer')
    <!-- Footer End -->
    <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
</div>
@livewireScripts
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('vendor/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script><!-- OWL-CAROUSEL JS -->
<script src="{{ asset('vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ asset('vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
<script src="{{ asset('vendor/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('vendor/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- LIGHTGALLERY -->
<script src="{{ asset('vendor/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT -->
<script src="{{ asset('js/dz.carousel.js') }}"></script><!-- OWL-CAROUSEL -->
<script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM JS -->

</body>
</html>
