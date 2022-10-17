<header class="{{ request()->routeIs('about') ? 'site-header header  mo-left' : 'site-header header header-transparent text-black mo-left' }}">
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
                        <a href="" class="btn btn-primary">Get A Quote<i class="fa fa-angle-right m-l10"></i></a>
                    </div>
                </div>
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li><a {{ request()->routeIs('home') ? ' class=tap' : '' }} href="{{route('home')}}"><span>Home</span></a></li>
                        <li><a {{ request()->routeIs('about') ? ' class=tap' : '' }} href="{{route('about')}}"><span>About</span></a></li>
                        <li><a href="javascript:void(0);"><span>Services</span><i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0);">Services <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="services-1.html">Services 1</a></li>
                                        <li><a href="services-2.html">Services 2</a></li>
                                        <li><a href="services-3.html">Services 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Services Details <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="services-details-1.html">Services Details 1</a></li>
                                        <li><a href="services-details-2.html">Services Details 2</a></li>
                                        <li><a href="services-details-3.html">Services Details 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><span>Post Layout</span><i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="post-standard.html">Post Standard</a></li>
                                <li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
                                <li><a href="post-header-image.html">Post Header Image</a></li>
                                <li><a href="post-slide-show.html">Post Slide Show</a></li>
                                <li><a href="post-side-image.html">Post Side Image</a></li>
                                <li><a href="post-gallery.html">Post Gallery</a></li>
                                <li><a href="post-gallery-alternative.html">Post Gallery Alt</a></li>
                                <li><a href="post-link.html">Post Link</a></li>
                                <li><a href="post-audio.html">Post Audio</a></li>
                                <li><a href="post-video.html">Post Video</a></li>
                                <li><a href="post-pagination.html">Post With Pagination</a></li>
                                <li><a href="post-open-gutenberg.html">Post Open Gutenberg</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><span>Blog</span><i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                <li><a href="blog-large-left-sidebar.html">Large Left Sidebar</a></li>
                                <li><a href="blog-large-right-sidebar.html">Large Right Sidebar</a></li>
                                <li><a href="javascript:void(0);">Blog Details <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details-1.html">Blog Details 1</a></li>
                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                        <li><a href="blog-details-3.html">Blog Details 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><span>Contact Us</span><i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                <li><a href="contact-us-3.html">Contact Us 3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
