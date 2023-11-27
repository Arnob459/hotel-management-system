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
                                <a class="btn-main" href="{{ route('rooms') }}"><span>Choose Room</span></a>
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
                <img src="{{asset('assets/images/logo/'. $gnl->breadcrumb)}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-lg-12 text-center">
                            <h2 class="title center">Our Rooms
                                <span class="small-border"></span>
                            </h2>
                        </div>
                        @foreach ($rooms as $item)
                        <div class="col-lg-4">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">only 2 room left</div>
                                    <div class="d-details">
                                        <span class="d-meta-1">
                                            <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">{{ $item->guest }} Guests
                                        </span>
                                        <span class="d-meta-2">
                                            <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">{{ $item->area }}
                                        </span>
                                    </div>
                                    <a href="{{ route('room.single',$item->id) }}">
                                        @foreach ($item->images as $image)
                                        <img src="{{ asset('assets/images/room/'.$image->picture) }}" class="img-fluid" alt="">
                                        @break
                                        @endforeach
                                    </a>
                                </div>

                                <div class="d-text">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->short_text }}</p>

                                    <a href="{{ route('room.single',$item->id) }}" class="btn-line"><span>Book Now For {{ $gnl->cur_sym}}{{formatter_money( $item->price) }}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section id="section-intro" class="pt60" data-bgcolor="#79552A">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-6">
                            <div class="spacer-double sm-hide"></div>
                            <img src="{{ asset('assets/images/about/'.$gnl_extra->about_image) }}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
                        </div>

                        <div class="col-lg-3 col-6">
                            <img src="{{ asset('assets/images/about/'.$gnl_extra->about_image2) }}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                        </div>

                        <div class="col-lg-6 wow fadeIn">
                                <div class="padding20">
                                <h2 class="title mb10">{{ $gnl_extra->about_title }}
                                    <span class="small-border"></span>
                                </h2>

                                <p>{{  $gnl_extra->about_des  }}</p>

                                <a href="{{ route('booking') }}" class="btn-line"><span>Book Now</span>s</a>

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
                                @foreach ($testimonials as $item)

                                <blockquote class="testimonial-big">
                                    <span class="d-testi">{{ $item->quote }}</span>
                                    <span class="name">{{ $item->author }}, {{ $item->designation }}</span>
                                </blockquote>
                                @endforeach


                        </div>
                    </div>
                </div>
            </section>

@endsection
