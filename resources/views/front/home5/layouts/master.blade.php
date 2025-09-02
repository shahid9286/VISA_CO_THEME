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
    @include('front.home5.layouts.partials.styles')
    <!-- ========== End Stylesheet ========== -->
    @yield('css')

</head>

<body class="color-secondary">


    <!-- Start Header Top
    ============================================= -->
    @include('front.home5.layouts.partials.top-bar')
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    @include('front.home5.layouts.partials.header')
    <!-- End Header -->

    </header>
    <!-- End Header -->







    {{-- <!-- Start content area  --}}

    @yield('content')
    <!-- End content area -->

    <!-- Start Footer 
    ============================================= -->
    @include('front.home5.layouts.partials.footer')
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    @include('front.home5.layouts.partials.scripts')
    <!-- ========== End jQuery ========== -->
        {{-- Extra JS for specific pages --}}
    @yield('js')
</body>
</html>