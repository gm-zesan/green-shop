<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <b>
                    <img src="{{ asset('/admin') }}/assets/images/logo-icon.png" alt="homepage"
                        class="dark-logo" />
                    <img src="{{ asset('/admin') }}/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <span>
                    <img src="{{ asset('/admin') }}/assets/images/logo-text.png" alt="homepage"
                        class="dark-logo" />
                    <img src="{{ asset('/admin') }}/assets/images/logo-light-text.png" class="light-logo"
                        alt="homepage" />
                </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a>
                </li>
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user"
                            class=""> <span class="hidden-md-down">{{ Auth::user()->name }} </span> </a>

                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <a href="{{ route('profile.show') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                            <i class="ti-power-off"></i> Logout
                        </a>
                        <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>