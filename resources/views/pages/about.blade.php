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
                            <h6 class="sub-title">ABOUT SIMBA</h6>
                        </div>
                        <p>
                            In a world where digital presence is paramount,
                            having a website that resonates with your audience is crucial.
                            As a freelance web developer, I bring a unique blend of creativity,
                            technical expertise, and a passion for crafting digital experiences
                            that leave a lasting impression.
                        </p>
                        <h6 class="sub-title">Why Collaborate with Me?</h6>
                        <p class="m-b20">
                        </p>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-arrow primary">
                                    <li>
                                        Personalized Approach: Every business is unique, and so should
                                        be its digital presence. I work closely with my clients to understand
                                        their vision and translate it into a functional and aesthetically pleasing website.
                                    </li>
                                    <li>
                                        Up-to-Date with Trends: The digital landscape is ever-evolving.
                                        I ensure that I'm always updated with the latest web development trends and
                                        technologies to deliver modern solutions.
                                    </li>
                                    <li>
                                        Transparent Communication: Open and regular communication is key.
                                        I believe in keeping my clients in the loop at every stage of the development process.
                                    </li>
                                    <li>
                                        Quality Over Quantity: For me, every project is a masterpiece in the making.
                                        I prioritize quality over quantity, ensuring that every website I develop meets
                                        the highest standards.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="m-b20">
                            In the realm of web development, I strive to bridge the gap between your business goals
                            and your online presence. If you're looking for a dedicated, skilled, and passionate
                            freelance web developer, let's collaborate and bring your vision to life.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter -->
        <livewire:projects.project-counter/>

        <!-- Testimonials -->
        <livewire:testimonials.testimonies/>
        <!-- Blog -->
{{--        <livewire:blog.list-blogs/>--}}

        <!-- Get A Quote -->
        <livewire:quote.get-quote/>

    </div>
</x-portfolio-layout>
