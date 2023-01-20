<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('backend.dashboard.index') }}">
            <span class="align-middle">{{ env('APP_NAME') }}</span>
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
            <li class="sidebar-item {{ request()->routeIs('backend.roles.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('backend.roles.index') }}">
                    <em class="bi bi-key align-middle"></em> <span class="align-middle">{{ __('Roles') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('backend.permissions.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('backend.permissions.index') }}">
                    <em class="bi bi-key-fill align-middle"></em> <span class="align-middle">{{ __('Permissions') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('backend.users.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('backend.users.index') }}">
                    <em class="bi bi-people align-middle"></em> <span class="align-middle">{{ __('Users') }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
