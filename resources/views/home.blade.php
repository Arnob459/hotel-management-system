{{-- @extends('layouts.app') --}}

@extends('master')
@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/room-single/bg.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Profile</h1>
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


                        </div>

                        <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <h3>Profile Information</h3>

                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        {{ auth()->user()->name }}
                                    </div>
                                    <div class="de-flex-col">
                                        {{ auth()->user()->email }}
                                    </div>
                                    <div class="de-flex-col">
                                        {{ auth()->user()->phone }}

                                    </div>
                                    <div class="de-flex-col">
                                        <a href="{{ route('profile') }}" class="btn-main"><span>Edit Profile</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Booking Information</h3>
                                @foreach ($booking as $item)
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>BOOKING CODE: {{$item->booking_code }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>CHECKIN DATE: {{$item->checkin_date }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>CHECKOUT Date: {{$item->checkout_date }}</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p> {{$item->room->title }},{{$item->room->roomtype->name }}  </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
