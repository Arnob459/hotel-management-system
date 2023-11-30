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
                            <a href="{{ route('room.single',[str_replace(' ','-',$item->name),$item->id]) }}">

                                @foreach ($item->images as $image)
                                <img src="{{ asset('assets/images/room/'.$image->picture) }}" class="img-fluid" alt="">
                                @break
                                @endforeach



                            </a>
                        </div>

                        <div class="d-text">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->short_text }}</p>
                            <a  href="{{ route('room.single',[str_replace(' ','-',$item->name),$item->id]) }}" class="btn-line"><span>Book Now For {{ $gnl->cur_sym}}{{formatter_money( $item->price) }}</span></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
