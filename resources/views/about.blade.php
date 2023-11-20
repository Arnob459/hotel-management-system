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

                                <a href="room-2-cols.html" class="btn-line"><span>Choose Room</span>s</a>

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

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="{{ asset('assets/frontend/images/svg/restaurant-svgrepo-com.svg') }}" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Restaurant</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/swimming-pool-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Swimming Pool</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/fitness-gym-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Fitness Area</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/coffee-table-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Mini Bar</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" >
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/meeting-explain-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Meeting Room</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/laundry-machine-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Laundry Service</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/screen-tv-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Satelite TV</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/safebox-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Safe Box</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="box-icon">
                                <span class="icon bg-color"><img src="images/svg/car-parking-svgrepo-com.svg" alt=""></span>
                                <div class="text">
                                    <h3 class="style-1">Parking Area</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


    @endsection
