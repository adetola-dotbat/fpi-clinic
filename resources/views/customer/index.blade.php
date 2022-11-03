<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>FPI-Clinic</title>
    <!-- Favicon Icon -->
    {{-- <link rel="icon" href="{{ asset('customer/assets/img/favicon.png') }}" /> --}}
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/jQueryUi.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/textRotate.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/style.css') }}" />
</head>

<body>
    {{-- @include('customer.pages.preload') --}}
    <!-- Start Header Section -->
    @include('customer.pages.header')
    <!-- End Header Section -->

    <div class="st-content">
        <!-- Start Hero Seciton -->
        @include('customer.pages.hero-section')
        <!-- End Hero Seciton -->

        <!-- Start Feature Seciton -->
        @include('customer.pages.feature')
        <!-- End Feature Seciton -->

        <!-- Start About Seciton -->
        @include('customer.pages.about')
        <!-- End About Seciton -->

        <!-- Start department Section -->
        @include('customer.pages.department')
        <!-- End department Section -->

        <!-- Start Service Section -->
        @include('customer.pages.appointment')
        <!-- End Service Section -->

        <!-- Start Team Section -->
        @include('customer.pages.doctors')
        <!-- End Team Section -->
        <hr>
        <!-- Start gallery Section -->

    </div>
    <!-- Start Footer -->
    @include('customer.pages.footer')
    <!-- End Footer -->

    <!-- Start Video Popup -->
    <div class="st-video-popup">
        <div class="st-video-popup-overlay"></div>
        <div class="st-video-popup-content">
            <div class="st-video-popup-layer"></div>
            <div class="st-video-popup-container">
                <div class="st-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="st-video-popup-close"></div>
            </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Scripts -->
    <script src="{{ asset('customer/assets/js/vendor/modernizr-3.5.0.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/isotope.pkg.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/jquery.slick.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/mailchimp.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/counter.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/lightgallery.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/ripples.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/wow.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/jQueryUi.js') }} "></script>
    <script src="{{ asset('customer/assets/js/textRotate.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/select2.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/main.js') }} "></script>
</body>

@livewireScripts


</html>
