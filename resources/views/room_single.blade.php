@extends('master')
@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/room-single/bg.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Luxury</h4>
                    <h1>Suite</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-content-overlay">
                    <div class="d-carousel wow fadeInRight" data-wow-delay="2s">
                        <div id="carousel-rooms" class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="{{ asset('assets/frontend/images/room-single/pf%20(1).jpg') }}">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                King size bed
                                            </span>
                                        </span>
                                    </a>

                                    <img src="{{ asset('assets/frontend/images/room-single/pf%20(1).jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="{{ asset('assets/frontend/images/room-single/pf%20(2).jpg') }}">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Balcony with ocean view
                                            </span>
                                        </span>
                                    </a>

                                    <img src="{{ asset('assets/frontend/images/room-single/pf%20(2).jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="{{ asset('assets/frontend/images/room-single/pf%20(3).jpg') }}">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Large bathroom
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(3).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(4).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Swimming pool
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(4).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(5).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Relaxing
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(5).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(6).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Free massage
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(6).jpg" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="images/room-single/pf%20(7).jpg">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                                Extra bed
                                            </span>
                                        </span>
                                    </a>

                                    <img src="images/room-single/pf%20(7).jpg" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">4 Guests
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">70 ft
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/bed.svg') }}" alt="">$79 / Night
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="booking.html" class="btn-main"><span>Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Room Overview</h3>
                                <p>Indulge in opulence in our premium suites, where refined design meets unparalleled luxury. These exquisite accommodations boast separate living and dining areas, a fully equipped kitchenette, and a private balcony or terrace with stunning vistas. Pamper yourself in the lavish bathroom, unwind in the plush seating area, and enjoy personalized services to make your stay truly exceptional. At our hotel, we strive to create an environment that exceeds your expectations. From the moment you step through our doors until the time you bid farewell, we are committed to delivering unparalleled hospitality and ensuring that your stay is nothing short of extraordinary. Enjoy access to our state-of-the-art fitness center, rejuvenate in our spa and wellness facilities, savor exquisite culinary delights in our on-site restaurants, and benefit from our attentive concierge services.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Room Facilities</h3>
                                <ul class="ul-style-2">
                                    <li>48" HD TV with more than 60 channels</li>
                                    <li>Coffee and tea makers</li>
                                    <li>Hot &amp; cold bathing</li>
                                    <li>High comfortable mattress bed</li>
                                    <li>Hight quality bed sheets</li>
                                    <li>Free WIFI internet connection</li>
                                    <li>Connecting room by request</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
