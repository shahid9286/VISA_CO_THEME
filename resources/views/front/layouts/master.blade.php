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
    @include('front.layouts.partials.styles')
    <!-- ========== End Stylesheet ========== -->

    @yield('css')

</head>

<body>

    <!-- Start Header Top
    ============================================= -->
    @include('front.layouts.partials.top-bar')
    <!-- End Header Top -->

    <!-- Header =================== -->
    @include('front.layouts.partials.header')
    <!-- End Header -->


        @yield('content')


    <!-- Start Footer
    ============================================= -->
@include('front.layouts.partials.footer-top')
    <!-- End Footer -->
@include('front.layouts.partials.footer')
    <!-- jQuery Frameworks
    ============================================= -->

    @include('front.layouts.partials.scripts')

    {{-- Extra JS for specific pages --}}
    @yield('js')

</body>

</html>
