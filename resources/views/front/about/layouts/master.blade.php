<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Page Title ========== -->
    <title>Tahzeel Group of Companies</title>
    <meta name="description" content="Tahzeel Group of Companies">

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->



        <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/visaco-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/validnavs.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/unit-test.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

    <!-- ========== End Stylesheet ========== -->

</head>

<body>





       <!-- Start Header Top 
    ============================================= -->
    @include('front.home1.layouts.partials.top-bar')

    <!-- End Header Top -->


        <!-- Header 
    ============================================= -->
    @include('front.home1.layouts.partials.header')

    <!-- End Header -->


            @yield('content')




           <!-- Start Footer Top 
    ============================================= -->
    @include('front.home1.layouts.partials.footer-top')

    <!-- End Footer Top -->

    <!-- Start Footer 
    ============================================= -->
    @include('front.home1.layouts.partials.footer')


    <!-- End Footer -->
    




    <!-- jQuery Frameworks
    ============================================= -->

        <script src="{{ asset('front/assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/progress-bar.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/circle-progress.js') }}"></script>
        <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/count-to.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/YTPlayer.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/validnavs.js') }}"></script>
        <script src="{{ asset('front/assets/js/gsap.js') }}"></script>
        <script src="{{ asset('front/assets/js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/SplitText.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/main.js') }}"></script>


</body>
</html>