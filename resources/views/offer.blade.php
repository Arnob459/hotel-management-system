@extends('master')

@section('content')

<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/8.jpg') }}) fixed"></div>
<div id="content-absolute">


        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Special</h4>
                        <h1>Offer</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu" >
                <div class="container">
                <div class="row g-4">

                    @foreach ($offers as $item)


                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 de-offer">
                                   <div class="d-text">
                                       <div class="d-inner">
                                            <h5 class="d-date">{{ $item->date }}</h5>
                                            <h3>{{ $item->title }}</h3>
                                            <p>{{ $item->short_text }}</p>
                                            <h5 class="d-tag">{{ $item->section }}</h5>
                                        </div>
                                    </div>
                                   <img src="{{ asset('assets/images/offer/'.$item->image) }}" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="clearfix"></div>

                    </div>

            </div>
        </section>

@endsection
