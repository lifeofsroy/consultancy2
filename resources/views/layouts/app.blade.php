<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} |@stack('title')</title>

    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Unique Career Guidance">
    <meta name="robots" content="INDEX,FOLLOW">
    @livewire('partial.front-meta')

    <!-- favicon -->
    <link href="{{ asset('assets/front/images/favicons/apple-icon-57x57.png') }}" rel="apple-touch-icon" sizes="57x57">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-60x60.png') }}" rel="apple-touch-icon" sizes="60x60">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-120x120.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-152x152.png') }}" rel="apple-touch-icon" sizes="152x152">
    <link href="{{ asset('assets/front/images/favicons/apple-icon-180x180.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link type="image/png" href="{{ asset('assets/front/images/favicons/android-icon-192x192.png') }}" rel="icon" sizes="192x192">
    <link type="image/png" href="{{ asset('assets/front/images/favicons/favicon-32x32.png') }}" rel="icon" sizes="32x32">
    <link type="image/png" href="{{ asset('assets/front/images/favicons/favicon-96x96.png') }}" rel="icon" sizes="96x96">
    <link type="image/png" href="{{ asset('assets/front/images/favicons/favicon-16x16.png') }}" rel="icon" sizes="16x16">
    <link href="{{ asset('assets/front/images/favicons/manifest.json') }}" rel="manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/front/images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Other css -->
    <link href="{{ asset('assets/front/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/lightcase.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">

    @livewire('partial.front-style')

    @livewire('partial.front-plugin')

    @stack('style')

    @livewireStyles

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-261528310-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-261528310-1');
    </script>
</head>

<body>
    <!-- preloader start here -->
    @livewire('partial.front-preloader')
    <!-- preloader ending here -->

    <!-- ==========Header Section Starts Here========== -->
    @livewire('partial.front-header')
    <!-- ==========Header Section Ends Here========== -->

    {{ $slot }}

    <!-- ==========Footer Section Starts Here========== -->
    @livewire('partial.front-footer')
    <!-- ==========Footer Section Ends Here========== -->

    <!-- scrollToTop start here -->
    <a class="scrollToTop" href="#"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->

    <!-- All Scripts -->
    <script src="{{ asset('assets/front/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/front/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/front/js/functions.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-261528310-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-261528310-1');
    </script>


    @stack('script')

    @livewireScripts
</body>

</html>
