<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="#" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- Title -->
    <title>Lendana</title>

    <!-- PWA Version -->
    {{-- <link rel="manifest" href="manifest.json"> --}}

    <!-- Stylesheets -->
    
    <link href="{{ asset('assets/pwa/vendor/imageuplodify/imageuploadify.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pwa/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pwa/vendor/swiper/swiper-bundle.min.css') }}">


</head>

<body>
    <div class="page-wraper">
        <!-- Preloader -->
        {{-- <div id="preloader">
		<div class="spinner"></div>
	</div> --}}
        <!-- Preloader end-->

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Sidebar End -->

        @yield('content')

        <!-- Menubar -->
        @include('layouts.menu_bar')
        <!-- Menubar -->

        <!-- PWA Offcanvas -->
        {{-- <div class="offcanvas offcanvas-bottom pwa-offcanvas">
		<div class="container">
			<div class="offcanvas-body small">
				<img class="logo" src="assets/pwa/images/icon.png" alt="">
				<h5 class="title">Jobie on Your Home Screen</h5>
				<p class="pwa-text">Install Jobie job portal mobile app template to your home screen for easy access, just like any other app</p>
				<a href="javascrpit:void(0);" class="btn btn-sm btn-secondary pwa-btn">Add to Home Screen</a>
				<a href="javascrpit:void(0);" class="btn btn-sm pwa-close light btn-danger ms-2">Maybe later</a>
			</div>
		</div>
	</div>
	<div class="offcanvas-backdrop pwa-backdrop"></div> --}}
        <!-- PWA Offcanvas End -->

    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="{{ asset('index.js') }}" defer></script>
    <script src="{{asset('assets/pwa/js/jquery.js')}}"></script>
    <script src="{{asset('assets/pwa/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/pwa/js/settings.js')}}"></script>
    <script src="{{asset('assets/pwa/js/custom.js')}}"></script>
    <script src="{{asset('assets/pwa/js/dz.carousel.js')}}"></script>
    <script src="{{asset('assets/pwa/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/pwa/vendor/imageuplodify/imageuploadify.min.js') }}"></script>
    @yield('js')
</body>

</html>
