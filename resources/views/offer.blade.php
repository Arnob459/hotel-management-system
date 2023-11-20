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

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 de-offer">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <h5 class="d-date">26th - 28th Dec 2021</h5>
                                            <h3>Shabu &amp; Grill</h3>
                                            <p>Enjoy tasty meat and vegetables package cook in hot pot and grill pan.</p>
                                            <h5 class="d-tag">Culinary</h5>
                                        </div>
                                   </a>
                                   <img src="{{ asset('assets/frontend/images/offer/1.jpg') }}" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 de-offer">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <h5 class="d-date">26th - 28th Dec 2021</h5>
                                            <h3>Pay 1 <span class="id-color">Get 2</span></h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore.</p>
                                            <h5 class="d-tag">Culinary</h5>
                                        </div>
                                   </a>
                                   <img src="images/offer/2.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 de-offer">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <h5 class="d-date">26th - 28th Dec 2021</h5>
                                            <h3>Flash Deal <span class="d-block id-color">60% off</span></h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore.</p>
                                            <h5 class="d-tag">Hotel Room</h5>
                                        </div>
                                   </a>
                                   <img src="images/offer/3.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>


                        <div class="clearfix"></div>

                        <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-center">

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                          </ul>
                        </nav>

                    </div>

            </div>
        </section>

@endsection
