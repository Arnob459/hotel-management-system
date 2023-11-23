@extends('master')

@section('content')

        <div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/2.jpg') }}) fixed"></div>
        <div id="content-absolute">

            <!-- subheader -->
            <section id="subheader" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>We Are</h4>
                            <h1>Seaside</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
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

                                <p>{!! $gnl_extra->about_des !!}</p>

                                <a href="{{ route('rooms') }}" class="btn-line"><span>Choose Room</span>s</a>

                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>


                    <div class="spacer-double"></div>

                    <div class="row gx-4">
                        <div class="col-lg-12 text-center">
                            <h2 class="title center">Hotel Facilities
                                <span class="small-border"></span>
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($facilities as $item)

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="{{ asset('assets/images/facility/'.$item->image) }}" alt="" ></span>
                                <div class="text">
                                    <h3 class="style-1">{{ $item->title }}</h3>
                                    <p>{{ $item->short_text }}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>

                </div>
            </section>


    @endsection
