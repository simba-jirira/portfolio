<section class="content-inner" style="background-image: url({{asset('images/background/bg19.png')}}); background-size:100%; background-position:center; background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="section-head style-1">
                    <h6 class="sub-title">CONTACT ME</h6>
                    <h2 class="title">GET IN TOUCH</h2>
                </div>
                <form class="dlab-form dzForm" method="POST" action="{{ route('contact.send') }}">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @csrf
                    <div class="dzFormMsg"></div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-user"></i></span>
                                </div>
                                <input name="first_name" type="text" required class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-user"></i></span>
                                </div>
                                <input name="last_name" type="text" class="form-control" required placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-envelope"></i></span>
                                </div>
                                <input name="email" type="text" required class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-phone"></i></span>
                                </div>
                                <input name="telephone" type="text" required class="form-control" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-file-alt"></i></span>
                                </div>
                                <input name="subject" type="text" class="form-control" required placeholder="Project Title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-list"></i></span>
                                </div>
                                <select name="service" class="form-control">
                                    <option selected>Choose Service</option>
                                    <option value="webdev">Web Development</option>
                                    <option value="webdes">Web Design</option>
                                    <option value="3">Strategy & Research</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 m-b20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-sms"></i></span>
                                </div>
                                <textarea name="message" required class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit"  class="btn btn-primary">Submit Now<i class="fa fa-angle-right m-l10"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-5 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="dlab-media cf-r-img">
                    <img src="images/about/pic2.png" class="move-1" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
