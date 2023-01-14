<x-portfolio-layout :title=$title>
    <div class="page-content bg-white">

        <!-- Slider -->
        <div class="banner-one" style="background-image: url({{asset('images/main-slider/slider1/pic2.png')}});">
            <div class="container">
                <div class="banner-inner">
                    <div class="img1"><img src="{{asset('images/main-slider/slider1/pic3.png')}}" alt=""></div>
                    <div class="img2"><img src="{{ asset('images/main-slider/slider1/pic4.png') }}" alt=""></div>
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="banner-content">
                                <h6 data-wow-duration="1s" data-wow-delay="0.5s" class="wow fadeInUp sub-title">Hey, I'm Simba.</h6>
                                <h1 data-wow-duration="1.2s" data-wow-delay="1s" class="wow fadeInUp">HOW WE CAN HELP YOUR <span class="text-primary">BUSINESS</span></h1>
                                <p  data-wow-duration="1.4s" data-wow-delay="1.5s" class="wow fadeInUp m-b30">Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac at purus.</p>
                                <a  data-wow-duration="1.6s" data-wow-delay="2s" class="wow fadeInUp btn btn-primary" href="about-us-2.html" >Learn More<i class="fa fa-angle-right m-l10"></i></a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="dz-media move-box wow fadeIn" data-wow-duration="1.6s" data-wow-delay="0.8s" >
                                <img class="move-1" src="{{ asset('images/main-slider/slider1/pic5.png') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section style="background-image: url({{ asset('images/background/bg1.png') }}); background-size:100%;">
            <!-- Clients Logo -->
            <div class="content-inner-2">
                <div class="container">
                    <div class="clients-carousel owl-none owl-carousel">
                        <div class="item">
                            <div class="clients-logo">
                                <img class="logo-main" src="{{ asset('images/logo/logo-purple1.png') }}" alt="">
                                <img class="logo-hover" src="{{ asset('images/logo/logo-light1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service -->
            <div class="content-inner-2">
                <div class="container">
                    <div class="section-head style-1 text-center">
                        <h6 class="sub-title">SERVICES</h6>
                        <h2 class="title">PROVIDE AWESOME SERVICE</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                                <div class="icon-bx-md radius bg-yellow shadow-yellow">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-office"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Strategy & Research</h4>
                                    <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper style-1 box-hover active text-center m-b30">
                                <div class="icon-bx-md radius bg-red shadow-red">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-website"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Web Development</h4>
                                    <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                                <div class="icon-bx-md radius bg-green shadow-green">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-pie-charts"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Web Solution</h4>
                                    <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <section class="content-inner" style="background-image: url({{asset('images/background/bg19.png')}}); background-size:100%;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dz-media">
                            <img src="{{ asset('images/about/img4.png') }}" class="move-1" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="section-head style-1 mb-4">
                            <h6 class="sub-title">ABOUT US</h6>
                            <h2 class="title">HOW  WE CAN HELP YOUR BUSINESS GOAL</h2>
                        </div>
                        <p class="m-b20">Integer pretium molestie nisl, non blandit lectus suscipit in. Vivamus tellus diam, iaculis eget nulla sit amet, tincidunt consectetur sem. Suspendisse laoreet, quam sed faucibus feugiat, tortor velit suscipit orci, sed consectetur ante eros id urna. Mauris luctus nulla ut pharetra tempor.</p>
                        <img src="{{ asset('images/sign.png') }}" alt="">
                        <h4 class="m-b30">CEO Jhone Doe</h4>
                        <a href="about-us-2.html" class="btn btn-primary">Learn More<i class="fa fa-angle-right m-l10 scale2"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter -->
        <livewire:projects.project-counter/>
        <!-- Fetures -->
        <section class="content-inner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="section-head style-1">
                            <h6 class="sub-title">FETURES</h6>
                            <h2 class="title">OUR WORK FLOW</h2>
                        </div>
                        <div class="section-wraper-one">
                            <div class="icon-bx-wraper style-2 left m-b30">
                                <div class="icon-bx-md radius bg-white text-red">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-idea"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Idea & Analysis Gathering</h4>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus.</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper style-2 left m-b30">
                                <div class="icon-bx-md radius bg-white text-yellow">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-line-graph"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Designing & Developing</h4>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus.</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper style-2 left m-b30">
                                <div class="icon-bx-md radius bg-white text-green">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-rocket"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">Testing & Lunching</h4>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 wow fadeInRight  " data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="dlab-media cf-r-img d-lg-block d-none">
                            <img src="{{ asset('images/about/pic1.png') }}" class="move-2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <livewire:projects.list-projects/>

        <!-- Newsletter -->
        <livewire:newsletter.add-news-letter/>

        <!-- Testimonials -->
        <livewire:testimonials.testimonies/>

        <!-- Blog -->
        <livewire:blog.list-blogs/>

        <!-- Get A Quote -->
        <livewire:quote.get-quote/>




    </div>
</x-portfolio-layout>

