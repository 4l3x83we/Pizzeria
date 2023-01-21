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
    @include('layouts.partials.admin.sidebar')

    <div class="main">
        @include('layouts.partials.admin.navbar')

        <main class="content">
            @if(Session::has('message'))
                <div id="alert" class="alert alert-primary d-flex align-items-center" role="alert">
                    <span class="bi flex-shrink-0 me-2"><em class="bi bi-megaphone"></em></span>
                    <div>
                        {{ __(Session::get('message')) }}
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </main>

        @include('layouts.partials.admin.footer')
    </div>
</div>

@stack('js')
@stack('script')
</body>
</html>
