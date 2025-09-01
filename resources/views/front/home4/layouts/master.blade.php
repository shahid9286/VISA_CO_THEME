<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Visaco - Immigration and Visa Consulting Template">

    <!-- ========== Page Title ========== -->
    <title>Visaco - Immigration and Visa Consulting Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    @include('front.home4.layouts.partials.styles')
    <!-- ========== End Stylesheet ========== -->
    @yield('css')

</head>

<body>


    <!-- Start Header Top
    ============================================= -->
    @include('front.home4.layouts.partials.top-bar')
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    @include('front.home4.layouts.partials.header')
    <!-- End Header -->



    <!-- content section
    ============================================= -->

        @yield('content')
            <!-- End content section -->
    <!-- Start Footer
    ============================================= -->
    <footer class="footer-style-two bg-dark overflow-hidden text-light"
        style="background: url(assets/img/shape/globe.png);">
            <!-- Start Footer Top
    ============================================= -->
    @include('front.home4.layouts.partials.footer-top')
    <!-- End Footer top-->
    <!-- Start Footer bottom
 ============================================= -->
    @include('front.home4.layouts.partials.footer')
    <!-- End Footer bottom -->

    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('front.home4.layouts.partials.scripts')

    {{-- Extra JS for specific pages --}}
    @yield('js')
</body>

</html>
