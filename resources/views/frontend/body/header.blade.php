<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}">Home</a></li>
                                    <li class="{{ request()->routeIs('about.home') ? 'active' : '' }}"><a  href="{{route('about.home')}}">About</a></li>
                                    <li class="menu-item-has-children"><a href="#">Portfolio</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="{{route('home.blog')}}">Our Blog</a>
                                    @if(auth()->check())
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('login') }}">Admin</a>
                                        </li>
                                    @else
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        @endif
                                    <li><a href="{{route('contact')}}">contact me</a></li>
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href=" {{route('contact')}}" class="btn">Contact me</a>
                            </div>

                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>

                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
