<x-portfolio-layout :title=$title>
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr overlay-primary-dark" style="background-image: url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>Contact</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Get A Quote -->
        <div class="content-inner" style="background-image: url({{asset('images/background/bg1.png')}});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="section-head style-1">
                            <h6 class="sub-title">CONTACT US</h6>
                            <h2 class="title">GET IN TOUCH</h2>
                        </div>
                        <form class="dlab-form dzForm" method="POST" action="script/contact_smtp.php">
                            <div class="dzFormMsg"></div>
                            <input type="hidden" class="form-control" name="dzToDo" value="Contact" >
                            <input type="hidden" class="form-control" name="reCaptchaEnable" value="0" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input name="dzName" type="text" required class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input name="dzOther[last_name]" type="text" class="form-control" required placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-envelope"></i></span>
                                        </div>
                                        <input name="dzEmail" type="text" required class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-phone"></i></span>
                                        </div>
                                        <input name="dzPhoneNumber" type="text" required class="form-control" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-file-alt"></i></span>
                                        </div>
                                        <input name="dzOther[project_title]" type="text" class="form-control" required placeholder="Project Title">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-list"></i></span>
                                        </div>
                                        <select name="dzOther[choose_service]" class="form-control">
                                            <option selected>Choose Service</option>
                                            <option value="1">Web Development</option>
                                            <option value="2">Web Design</option>
                                            <option value="3">Strategy & Research</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 m-b20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-sms"></i></span>
                                        </div>
                                        <textarea name="dzMessage" required class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button name="submit" type="submit" value="Submit" class="btn btn-primary">Submit Now<i class="fa fa-angle-right m-l10"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-5 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dlab-media cf-r-img">
                            <img src="images/about/img2.png" class="move-4" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-portfolio-layout>
