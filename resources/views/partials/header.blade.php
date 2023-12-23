<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ asset('assets/vendors/images/photo1.jpg') }}" alt="" />
                    </span>
                    <span class="user-name">
                        {{ auth()->user()->name }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="profile.html">
                        <i class="dw dw-user1"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="profile.html">
                        <i class="dw dw-settings2"></i>
                        Setting
                    </a>
                    <a class="dropdown-item" href="faq.html">
                        <i class="dw dw-help"></i>
                        Help
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dw dw-logout"></i>
                        Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
