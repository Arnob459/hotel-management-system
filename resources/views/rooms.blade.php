@extends('master')

@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/6.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Select</h4>
                    <h1>Rooms</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
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
                            <a href="{{ route('room.single') }}">
                                <img src="{{ asset('assets/frontend/images/room/1.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('assets/frontend/images/room/1-alt.jpg') }}" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Standard Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="{{ route('room.single') }}" class="btn-line"><span>Book Now For $29</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 1 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">35 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/2.jpg" class="img-fluid" alt="">
                                <img src="images/room/2-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Deluxe Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $39</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 3 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">2 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">40 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/3.jpg" class="img-fluid" alt="">
                                <img src="images/room/3-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Premier Room</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $49</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 2 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">4 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">60 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/4.jpg" class="img-fluid" alt="">
                                <img src="images/room/4-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Family Suite</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $59</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 2 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">4 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">70 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/5.jpg" class="img-fluid" alt="">
                                <img src="images/room/5-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Luxury Suite</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $79</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">only 2 room left</div>
                            <div class="d-details">
                                <span class="d-meta-1">
                                    <img src="images/ui/user.svg" alt="">4 Guests
                                </span>
                                <span class="d-meta-2">
                                    <img src="images/ui/floorplan.svg" alt="">90 ft
                                </span>
                            </div>
                            <a href="room-single.html">
                                <img src="images/room/6.jpg" class="img-fluid" alt="">
                                <img src="images/room/6-alt.jpg" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>

                        <div class="d-text">
                            <h3>Presidential Suite</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="room-single.html" class="btn-line"><span>Book Now For $99</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
