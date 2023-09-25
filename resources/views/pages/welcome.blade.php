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
                                <h6 data-wow-duration="1s" data-wow-delay="0.5s" class="wow fadeInUp sub-title">CREATING DIGITAL MASTERPIECES</h6>
                                <h1 data-wow-duration="1.2s" data-wow-delay="1s" class="wow fadeInUp">HOW CAN I HELP YOUR <span class="text-primary">BUSINESS</span></h1>
                                <p  data-wow-duration="1.4s" data-wow-delay="1.5s" class="wow fadeInUp m-b30">
                                    Every venture is unique, just like its digital footprint should be.
                                    I specialize in crafting websites that resonate with
                                    your brand's voice and cater to your specific audience.
                                </p>
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
                                    <p>
                                        Driven by objectives, refined through testing, and optimized with analytics.
                                    </p>
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
                                    <p>
                                        Fusing design with function, driven by strategy & research to align user needs with brand vision.
                                    </p>
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
                                    <p>
                                        Through Strategy & Research, my development crafts solutions Bridging user needs with brand vision.
                                    </p>
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
                            <h6 class="sub-title">ABOUT SIMBA</h6>
                            <h2 class="title">HOW I CAN HELP YOUR BUSINESS GOAL</h2>
                        </div>
                        <p class="m-b20">
                            In the fast-paced world of digital business, having a distinctive online presence is crucial.
                            As a freelance web developer, I, Simba, am dedicated to realizing your brand's full potential on the web.
                            Leveraging the latest technologies and a deep understanding of user behavior, I craft websites that are not
                            only visually compelling but also functionally seamless. By understanding your objectives, I transform your
                            vision into a digital platform that drives engagement, enhances user experience, and supports your business growth.
                            Partner with me to navigate the digital landscape efficiently and achieve your goals.
                        </p>

                        <a href="{{route('about')}}" class="btn btn-primary">Learn More<i class="fa fa-angle-right m-l10 scale2"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter -->
        <livewire:projects.project-counter/>
        <!-- Features -->
        @include('pages.features.feature')
        <!-- Projects -->
        <livewire:projects.list-projects/>

        <!-- Newsletter -->
        <livewire:newsletter.add-news-letter/>

        <!-- Testimonials -->
        <livewire:testimonials.testimonies/>

        <!-- Blog -->
        <!-- <livewire:blog.list-blogs/>   -->


        <!-- Get A Quote -->
        <livewire:quote.get-quote/>




    </div>
</x-portfolio-layout>

