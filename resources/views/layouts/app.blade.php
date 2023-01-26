<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @stack('css')
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('layouts.partials.frontend.navbar')
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    @include('layouts.partials.frontend.footer')
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="javascript:" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="display: none;"><em class="bi bi-arrow-up"></em></a>

    @stack('js')
    @stack('scripts')
</body>
</html>
