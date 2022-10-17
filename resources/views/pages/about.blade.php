<x-portfolio-layout :title=$title>
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr overlay-primary-dark" style="background-image: url({{ asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>ABOUT</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Simba Jirira</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- About Us -->
        <section class="content-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dz-media">
                            <img src="{{ asset('images/about/img4.png')}}" class="move-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="section-head style-1">
                            <h6 class="sub-title">ABOUT SIMBA JIRIRA</h6>
                            <h2 class="title">HOW CAN HELP YOUR BUSINESS GOALS</h2>
                        </div>
                        <p>Integer pretium molestie nisl, non blandit lectus suscipit in. Vivamus tellus diam, iaculis eget nulla sit amet, tincidunt consectetur sem. Suspendisse laoreet, quam sed faucibus feugiat, tortor velit suscipit orci, sed consectetur ante eros id urna. Mauris luctus nulla ut pharetra tempor.</p>
                        <p class="m-b20">Mauris egestas eleifend sapien eu malesuada. Phasellus at metus eget sapien tristique accumsan non sit amet augue.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-arrow primary">
                                    <li>Nulla dict posuere veliitae.</li>
                                    <li>Etiam orci magna, accumsan.</li>
                                    <li>Donec fringilla velit risusquis.</li>
                                    <li>Aliquam pulvinar tempor.</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-arrow primary">
                                    <li>Nulla dict posuere veliitae.</li>
                                    <li>Etiam orci magna, accumsan.</li>
                                    <li>Donec fringilla velit risusquis.</li>
                                    <li>Aliquam diam tempor.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter -->
        <livewire:projects.project-counter/>

        <!-- Testimonials -->
        <livewire:testimonials.testimonies/>
        <!-- Blog -->
        <livewire:blog.list-blogs/>

        <!-- Get A Quote -->
        <livewire:quote.get-quote/>

    </div>
</x-portfolio-layout>
