<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('dashboard.index') }}">
            <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo" />
            <img src="{{ asset('assets/vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="dropdown-toggle no-arrow {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="micon bi bi-speedometer2"></i>
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="dropdown-toggle no-arrow {{ Request::is('users') ? 'active' : '' }}">
                        <i class="micon bi bi-people"></i>
                        <span class="mtext">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
