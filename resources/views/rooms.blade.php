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
                @foreach ($rooms as $item)

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

                                @foreach ($item->images as $image)
                                @endforeach
                                <img src="{{ asset('assets/images/room/'.$image->picture) }}" class="img-fluid" alt="">



                            </a>
                        </div>

                        <div class="d-text">
                            <h3>{{ $item->name }}</h3>
                            <p>Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury...</p>
                            <a href="{{ route('room.single') }}" class="btn-line"><span>Book Now For $29</span></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
