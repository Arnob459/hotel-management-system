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

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-1.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-item-1.jpg') }}" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-2.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-item-2.jpg') }}" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-3.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-item-3.jpg') }}" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-4.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/gallery/gallery-item-4.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-5.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/gallery/gallery-item-5.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-8 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-6.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/gallery/gallery-item-6.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de-image-hover">
                        <a href="images/gallery/gallery-item-7.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Gallery Title</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/gallery/gallery-item-7.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
