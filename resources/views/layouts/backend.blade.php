<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Backend') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/backend/app.js'])

    @stack('css')
</head>
<body>
    <div class="wrapper">
        @include('layouts.partials.backend.sidebar')

        <div class="main">
            @include('layouts.partials.backend.navbar')

            <main class="content">
                @yield('content')
            </main>

            @include('layouts.partials.backend.footer')
        </div>
    </div>

    @stack('js')
    @stack('script')
</body>
</html>
