@extends('master')

@section('content')


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">



            <section class="no-top no-bottom jarallax vertical-center" data-video-src="mp4:{{ asset('assets/frontend/images/video/local-video-1.mp4') }}">

                <div class="de-overlay v-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1>Enjoy Your<br>Dream Vacation</h1>
                                <p class="lead">The Seaside Hotel is the right choice for visitors who are searching for a combination of charm, peace and, comfort.</p>
                                <a class="btn-main" href="#"><span>Choose Room</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="no-top no-bottom bg-color text-light">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
                            <div class="info-box padding20">
                                <i class="icon_clock_alt"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Opening Times</div>
                                    <div class="info-box_subtite">Monday - Friday: 09:00 - 18:00</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
                            <div class="info-box padding20">
                                <i class="icon_house_alt"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Our Location</div>
                                    <div class="info-box_subtite">100 S Main St, Los Angeles, CA</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
                            <div class="info-box padding20">
                                <i class="icon_headphones"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Customer Support</div>
                                    <div class="info-box_subtite">+208 333 9296</div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <section class="jarallax">
                <img src="{{ asset('assets/frontend/images/background/7.jpg') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-lg-12 text-center">
                            <h2 class="title center">Our Rooms
                                <span class="small-border"></span>
                            </h2>
                        </div>
                        <div class="col-lg-4">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">only 2 room left</div>
                                    <div class="d-details">
                                        <span class="d-meta-1">
                                            <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">2 Guests
                                        </span>
                                        <span class="d-meta-2">
                                            <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">30 ft
                                        </span>
                                    </div>
                                    <a href="room-single.html">
                                        <img src="{{ asset('assets/frontend/images/room/1.jpg') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('assets/frontend/images/room/1-alt.jpg') }}" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="d-text">
                                    <h3>Standard Room</h3>
                                    <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                                    <a href="room-single.html" class="btn-line"><span>Book Now For $29</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">only 1 room left</div>
                                    <div class="d-details">
                                        <span class="d-meta-1">
                                            <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">2 Guests
                                        </span>
                                        <span class="d-meta-2">
                                            <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">35 ft
                                        </span>
                                    </div>
                                    <a href="room-single.html">
                                        <img src="{{ asset('assets/frontend/images/room/2.jpg') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('assets/frontend/images/room/2-alt.jpg') }}" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="d-text">
                                    <h3>Deluxe Room</h3>
                                    <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                                    <a href="room-single.html" class="btn-line"><span>Book Now For $39</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">only 3 room left</div>
                                    <div class="d-details">
                                        <span class="d-meta-1">
                                            <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">2 Guests
                                        </span>
                                        <span class="d-meta-2">
                                            <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">40 ft
                                        </span>
                                    </div>
                                    <a href="room-single.html">
                                        <img src="{{ asset('assets/frontend/images/room/3.jpg') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('assets/frontend/images/room/3-alt.jpg') }}" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="d-text">
                                    <h3>Premier Room</h3>
                                    <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                                    <a href="room-single.html" class="btn-line"><span>Book Now For $49</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-intro" class="pt60" data-bgcolor="#79552A">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-6">
                            <div class="spacer-double sm-hide"></div>
                            <img src="{{ asset('assets/frontend/images/misc/1.jpg') }}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
                        </div>

                        <div class="col-lg-3 col-6">
                            <img src="{{ asset('assets/frontend/images/misc/2.jpg') }}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                        </div>

                        <div class="col-lg-6 wow fadeIn">
                                <div class="padding20">
                                <h2 class="title mb10">The Luxury Experience<br>You'll Remember
                                    <span class="small-border"></span>
                                </h2>

                                <p>Welcome to our luxurious hotel, where sophistication, impeccable service, and unparalleled comfort await you. From the moment you step into our grand lobby, you'll be immersed in an atmosphere of opulence and refined elegance. As you enter our elegant establishment, you will be greeted by a captivating ambiance that exudes sophistication and tranquility.</p>

                                <a href="#" class="btn-line"><span>Book Now</span>s</a>

                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>

            <section class="jarallax">
                <img src="{{ asset('assets/frontend/images/background/4.jpg') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-lg-12 text-center">
                            <h2 class="title center">Testimonials
                                <span class="small-border"></span>
                            </h2>
                        </div>

                        <div class="col-md-8 offset-md-2 wow fadeInUp">

                            <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                                <blockquote class="testimonial-big">
                                    <span class="d-testi">The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown</span>
                                    <span class="name">Benedict Mervine, Customer</span>
                                </blockquote>

                                <blockquote class="testimonial-big">
                                    <span class="d-testi">They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The sevice was exceptional as well. Would definitely send a friend there.</span>
                                    <span class="name">Doretta Mccourtney, Customer</span>
                                </blockquote>

                                <blockquote class="testimonial-big">
                                    <span class="d-testi">I had a wonderful experience at the hotel. Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues!</span>
                                    <span class="name">Carole Hunckler, Customer</span>
                                </blockquote>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

@endsection
