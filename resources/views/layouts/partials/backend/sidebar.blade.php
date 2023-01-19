<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('backend.dashboard.index') }}">
            <span class="align-middle">{{ env('APP_NAME') }}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('backend.dashboard.index') }}">
                    <em class="bi bi-speedometer align-middle"></em> <span class="align-middle">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
