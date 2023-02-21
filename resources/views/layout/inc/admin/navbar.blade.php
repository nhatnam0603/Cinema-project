    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{route('home')}}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('home')}}"><img src="{{ asset('assets/img/logo/logo.png')}}"
                        alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown me-4">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <!-- <img src="{{ asset('admin/images/faces/face5.jpg') }}" alt="profile" /> -->
                        <span class="nav-profile-name">
                                @if(auth()->check())
                                <span>{{auth()->user()->name}}</span>
                                @else
                                <a href="{{route('login')}}">Login</a>
                                @endif
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <form action="logout" method="get">
                                @csrf
                                <button class="mdi mdi-logout success">
                                    <i type="submit">Logout</i>
                                </button>
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>




