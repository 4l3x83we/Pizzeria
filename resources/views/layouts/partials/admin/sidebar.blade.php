<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.dashboard.index') }}">
            <span class="align-middle">{{ env('APP_NAME') }}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                {{ __('Pages') }}
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.dashboard.index') }}">
                    <em class="bi bi-speedometer align-middle"></em> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.allergene.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.allergene.index') }}">
                    <em class="bi bi-list align-middle"></em> <span class="align-middle">{{ __('Allergene') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.additive.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.additive.index') }}">
                    <em class="bi bi-list align-middle"></em> <span class="align-middle">{{ __('Additive') }}</span>
                </a>
            </li>

            <li class="sidebar-header">
                {{ __('User') }}
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.roles.index') }}">
                    <em class="bi bi-key align-middle"></em> <span class="align-middle">{{ __('Roles') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.permissions.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.permissions.index') }}">
                    <em class="bi bi-key-fill align-middle"></em> <span class="align-middle">{{ __('Permissions') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.users.index') }}">
                    <em class="bi bi-people align-middle"></em> <span class="align-middle">{{ __('Users') }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
