@extends('master')

@section('content')

<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/3.jpg') }}) fixed"></div>
<div id="content-absolute">



        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Latest</h4>
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu" >
                <div class="container">
                <div class="row g-4">

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="{{route('blog.single')}}" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>The Most Influential People in the Hotel Industry</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="{{ asset('assets/frontend/images/blog/1.jpg') }}" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>The Best Advice You Could Ever Get About Hotel</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="images/blog/2.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="{{route('blog.single')}}" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>14 Unbelievable Things You Never Knew About Hotel</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="images/blog/3.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>How People Talked About Hotel 20 Years Ago</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="images/blog/4.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>Some Good News About Hotel to Brighten Your Day</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="images/blog/5.jpg" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="blog-single.html" class="d-text">
                                       <div class="d-inner">
                                            <span class="atr-date">Dec 10, 2021</span>
                                            <h3>The Most Underrated Hotel You Need to Know</h3>
                                            <p>Quis cupidatat quis dolore amet aliquip ea exercitation labore proident dolore minim culpa ullamco aute eiusmod tempor anim nostrud quis officia dolore adipisicing elit ex est adipisicing.</p>
                                            <h5 class="d-tag">Vacation</h5>
                                        </div>
                                   </a>
                                   <img src="images/blog/6.jpg" class="img-fluid" alt="">
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
