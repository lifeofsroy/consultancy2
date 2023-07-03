<header class="header header__one header__three">
    <div class="header__top">
        <div class="container" style="margin-left: 10px; margin-right:0; max-width: 100% !important">
            <div class="row align-items-center">
                <div class="col-xl-4 col-12">
                    <div class="info">
                        <ul>
                            <li style="border:0">
                                <img src="{{ asset('assets/front/images/header/icon/call.png') }}" alt="icon" />
                                <span>{{ $header->phone }}</span>
                            </li>
                            <li style="border:0">
                                <img src="{{ asset('assets/front/images/header/icon/mail.png') }}" alt="icon" />
                                <span>{{ $header->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-8 col-12">
                    <div class="social text-xl-end">
                        @livewire('partial.front-notice')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom" style="padding-block: 5px;">
        <div class="container">
            <div class="area">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/front/images/logo.png') }}" alt="logo" width="200" />
                    </a>
                </div>
                <div class="main-menu">
                    <div class="menu">
                        <ul style="margin-right: 30px;">
                            <li>
                                <a class="{{ Route::is('home') ? 'menu-active' : '' }}" href="{{ route('home') }}">Home</a>
                            </li>

                            <li>
                                <a class="{{ Route::is('about') ? 'menu-active' : '' }}" href="{{ route('about') }}">About Us</a>
                            </li>

                            <li>
                                <a class="{{ Route::is('service.category') ? 'menu-active' : '' }}"
                                    href="{{ route('service.category') }}">Services</a>
                            </li>

                            <li>
                                <a class="{{ Route::is('facility*') ? 'menu-active' : '' }}" href="#">Facilities</a>
                                <ul>
                                    <li>
                                        <a class="{{ Route::is('facility.course') ? 'menu-active' : '' }}"
                                            href="{{ route('facility.course') }}">Courses</a>
                                    </li>

                                    <li>
                                        <a class="{{ Route::is('facility.institution') ? 'menu-active' : '' }}"
                                            href="{{ route('facility.institution') }}">Institutions</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="{{ Route::is('contact') ? 'menu-active' : '' }}" href="{{ route('contact') }}">contact Us</a>
                            </li>

                            <li>
                                <a class="{{ Route::is('facility*') ? 'menu-active' : '' }}" href="#">My Account</a>
                                <ul>
                                    @if (Route::has('login'))
                                        @auth
                                            <li><a href="{{ route('dashboard') }}" style="border:0">Dashboard</a></li>
                                            <li><a href="{{ route('logout') }}" style="border:0"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                        @else
                                            <li><a href="{{ route('login') }}" style="border:0">Login</a></li>
                                            <li><a href="{{ route('register') }}" style="border:0">Register</a></li>
                                        @endauth
                                    @endif
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>

                        <a class="lab-btn {{ Route::is('admission') ? 'text-light' : '' }}" href="{{ route('admission') }}">Get Admission</a>

                    </div>

                    <div class="header__bararea">
                        <div class="header__bar d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="header__ellepsis d-xl-none">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
