<section class="content-inner-3 bg-primary" style="background-image: url({{asset('images/background/bg13.png')}}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-5 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dlab-media m-b30">
                    <img src="{{ asset('images/about/img9.png') }}" class="move-2" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-7 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="section-head style-1 text-white">
                    <h6 class="sub-title text-white">NEWSLETTER</h6>
                    <h2 class="title m-b15">JOIN MY LIST</h2>
                    <p>
                        Stay at the forefront of web development with insights, tips, and updates from my freelance journey.
                        By subscribing, you'll not only receive fresh perspectives and code snippets but also exclusive
                        first-looks at my open-source projects. Dive deep into collaborative coding, gain early access to tools,
                        and be a part of a community pushing boundaries. Let's innovate together.
                    </p>
                </div>
                <div class="dlab-subscribe style-2 max-w500">
                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                        <div class="dzSubscribeMsg"></div>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-addon">
                                    <button name="submit" value="Submit" type="submit" class="btn btn-primary">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
