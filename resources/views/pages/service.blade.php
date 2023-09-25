<x-portfolio-layout :title=$title>
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr overlay-primary-dark" style="background-image: url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>SERVICES I OFFER</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Service -->
        <section class="content-inner" style="background-image: url({{asset('images/background/bg1.png')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                            <div class="icon-bx-md radius bg-yellow shadow-yellow">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-office"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">Strategy & Research</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-1 box-hover active text-center m-b30">
                            <div class="icon-bx-md radius bg-red shadow-red">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-website"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">Web Development</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                            <div class="icon-bx-md radius bg-green shadow-green">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-pie-charts"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">Web Solution</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                            <div class="icon-bx-md radius bg-skyblue shadow-skyblue">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-dollar"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">Company Branding</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                            <div class="icon-bx-md radius bg-orange shadow-orange">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-line-graph"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">SEO & Marketing</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                            <div class="icon-bx-md radius bg-maroon shadow-maroon">
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-help"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-title">24X7 Support</h4>
                                <p>Fusce sit amet dui vitae urna tristique imperdiet. Donec eget sapien euismod, faucibus nibh non, consequat elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <livewire:newsletter.add-news-letter/>

        <!-- Fetures -->
        <section class="content-inner">
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
                    <div class="col-xl-6 col-lg-5 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="dlab-media cf-r-img">
                            <img src="images/about/pic1.png" class="move-2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <livewire:testimonials.testimonies/>

        <!-- Get A Quote -->
        <livewire:quote.get-quote/>

    </div>
</x-portfolio-layout>
