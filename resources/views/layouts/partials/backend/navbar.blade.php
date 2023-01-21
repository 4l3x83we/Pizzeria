<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item">
                <a class="nav-link d-none d-sm-inline-block" href="#">
                    <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="{{ auth()->user()->name }}" /> <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <a class="nav-link d-inline-block" href="{{ route('logout') }}" title="{{ __('Logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <em class="align-middle bi bi-box-arrow-right"></em>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
