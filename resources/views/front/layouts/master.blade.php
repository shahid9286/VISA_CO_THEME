<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | VISA_CO_THEME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/core/fav.png') }}" type="image/png">

    <!-- Styles -->
    @include('front.layouts.partials.styles')

    {{-- Extra CSS for specific pages --}}
    @yield('css')
</head>

<body>
    <!-- Header -->
    @include('front.layouts.partials.header')

    <!-- Main Content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('front.layouts.partials.footer')

    <!-- Scripts -->
    @include('front.layouts.partials.scripts')

    {{-- Extra JS for specific pages --}}
    @yield('js')
</body>
</html>


