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
                                <input name="first_name" type="text" required class="form-control @error('first_name') is-invalid @enderror"
                                       placeholder="First Name" value="{{old('first_name')}}">
                                @error('first_name')
                                    <div class="invalid-feedback fs-10 ">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-user"></i></span>
                                </div>
                                <input name="last_name" type="text"
                                       value="{{old('last_name')}}"
                                       class="form-control @error('last_name') is-invalid @enderror" required placeholder="Last Name">
                                @error('last_name')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-envelope"></i></span>
                                </div>
                                <input name="email" type="text" required
                                       value="{{old('email')}}"
                                       class="form-control @error('email') is-invalid @enderror" placeholder="Email Address">
                                @error('email')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-phone"></i></span>
                                </div>
                                <input name="telephone" type="text" required
                                       value="{{old('telephone')}}"
                                       class="form-control @error('telephone') is-invalid @enderror" placeholder="Phone No.">
                                @error('telephone')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-file-alt"></i></span>
                                </div>
                                <input name="subject" type="text"
                                       value="{{old('subject')}}"
                                       class="form-control @error('subject') is-invalid @enderror" required placeholder="Project Title">
                                @error('subject')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-list"></i></span>
                                </div>
                                <select name="service" class="form-control @error('service') is-invalid @enderror" required>
                                    <option selected>Choose Service</option>
                                    <option value="Responsive Design">Responsive Web Design</option>
                                    <option value="E-commerce Solutions">E-commerce Solutions</option>
                                    <option value="Content Management">Content Management System</option>
                                    <option value="Custom Applications">Custom Applications</option>
                                    <option value="API Development & Integration">API Development & Integration</option>
                                    <option value="SEO Optimization">SEO Optimization</option>
                                    <option value="Performance Optimization">Performance Optimization</option>
                                    <option value="Website Maintenance">Website Maintenance</option>
                                    <option value="UI/UX Design">Web Development</option>
                                </select>
                                @error('service')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 m-b20">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-sms"></i></span>
                                </div>
                                <textarea name="message" required
                                          class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                                @error('message')
                                <div class="invalid-feedback fs-10 ">
                                    {{$message}}
                                </div>
                                @enderror
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
