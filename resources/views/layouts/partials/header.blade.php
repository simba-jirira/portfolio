<header class="{{ request()->routeIs('home') ? 'site-header header header-transparent text-black mo-left' : 'site-header header  mo-left'}}">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header  logo-dark">
                    <a href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Extra Nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="{{route('contact')}}" class="btn btn-primary">Get A Quote<i class="fa fa-angle-right m-l10"></i></a>
                    </div>
                </div>
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li {{ request()->routeIs('home') ? ' class=tap active' : '' }}><a  href="{{route('home')}}"><span>Home</span></a></li>
                        <li {{ request()->routeIs('about') ? ' class=tap' : '' }}><a  href="{{route('about')}}"><span>About</span></a></li>
                        <li {{ request()->routeIs('service') ? ' class=tap' : '' }}><a  href="{{route('service')}}"><span>Services</span></a></li>
                        <li {{ request()->routeIs('contact') ? ' class=tap' : '' }}><a  href="{{route('contact')}}"><span>Contact</span></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
