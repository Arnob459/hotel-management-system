@extends('master')
@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/room-single/bg.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ $room->name }}</h1>
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
                            @foreach ($photos as $item)
                            <div class="item">
                                <div class="picframe">
                                    <a class="image-popup-gallery" href="{{ asset('assets/images/room/'.$item->picture) }}">
                                        <span class="overlay">
                                            <span class="pf_title">
                                                <i class="icon_search"></i>
                                            </span>
                                            <span class="pf_caption">
                                            </span>
                                        </span>
                                    </a>

                                    <img src="{{ asset('assets/images/room/'.$item->picture) }}" alt="">
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/user.svg') }}" alt="">{{ $room->guest }} Guests
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/floorplan.svg') }}" alt="">{{ $room->area }}
                                    </div>
                                    <div class="de-flex-col">
                                        <img src="{{ asset('assets/frontend/images/ui/bed.svg') }}" alt="">{{ $gnl->cur_sym}} {{formatter_money( $room->price) }} / Night
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="{{ route('booking') }}" class="btn-main"><span>Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Room Overview</h3>
                                <p>{{ $room->description }}</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Room Facilities</h3>
                                <ul class="ul-style-2">
                                    {{ $room->facility }}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
