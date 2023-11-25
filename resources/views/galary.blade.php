@extends('master')
@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/5.jpg') }}) fixed"></div>
<div id="content-absolute">


    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Latest</h4>
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div id="gallery" class="row g-4">
                @foreach ($gallery as $item)
                    <div class="col-md-4 item">
                        <div class="de-image-hover">
                            <a href="{{ asset('assets/images/gallery/'.$item->image) }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">{{ $item->title }}</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('assets/images/gallery/'.$item->image) }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
