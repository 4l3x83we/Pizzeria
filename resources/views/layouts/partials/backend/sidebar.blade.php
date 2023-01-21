<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('backend.dashboard.index') }}">
            <span class="align-middle">{!! Str::limit(env('APP_NAME'), 20, '') !!}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                {{ __('Pages') }}
            </li>

            <li class="sidebar-item {{ request()->routeIs('backend.dashboard.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('backend.dashboard.index') }}">
                    <em class="bi bi-speedometer align-middle"></em> <span class="align-middle">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
