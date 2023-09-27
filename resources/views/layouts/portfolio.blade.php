<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Description -->
    <meta name="description" content="Explore the portfolio of Simba Jirira, a skilled freelance web developer with expertise in modern web technologies and a passion for creating responsive and user-friendly websites.">
    <!-- Meta Keywords -->
    <meta name="keywords" content="Simba Jirira, freelance web developer, web development portfolio, freelance developer, web design, responsive web development, front-end developer, back-end developer, full-stack developer">

    <!-- Content Language -->
    <meta name="content-language" content="en">
    <!-- Revisit Policy (tells search engines when to come back) -->
    <meta name="revisit-after" content="7 days">
    <!-- Rating (general content rating) -->
    <meta name="rating" content="general">
    <!-- Distribution (intended audience) -->
    <meta name="distribution" content="global">
    <!-- Cache Control (guide for browsers and search engines for caching your content) -->
    <meta http-equiv="cache-control" content="public">
    <!-- Expires (set an expiration date for the content) -->
    <meta http-equiv="expires" content="Mon, 01 Jan 2025 00:00:00 GMT">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>{{ $title ?? 'Simba Jirira - Freelance Website Designer / Developer' }}</title>
    <!-- Canonical Tag (to avoid duplicate content issues) -->
    <link rel="canonical" href="https://www.simbajirira.com">
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
