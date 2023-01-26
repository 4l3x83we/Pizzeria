<header class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-md navbar-dark text-bg-dark shadow-sm wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
{{--                {{ config('app.name', 'Laravel') }}--}}
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="img-fluid" style="width: 80px; height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto" id="main-navbar">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <em class="bi bi-cart4"></em>
                            <span class="badge rounded-pill badge-notification bg-danger">9</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



