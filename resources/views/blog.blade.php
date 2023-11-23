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
                    @foreach ($blogs as $item)


                        <div class="col-lg-4 col-md-6">
                            <div class="d-items">
                               <div class="card-image-1 mod-b">
                                   <a href="{{route('blog.single')}}" class="d-text">
                                       <div class="d-inner">
                                            <h3>{{ $item->title }}</h3>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                   </a>
                                   <img src="{{ asset('assets/images/blog/'.$item->image ) }}" class="img-fluid" alt="">
                               </div>
                            </div>
                        </div>
                    @endforeach

                        <div class="clearfix"></div>

                    </div>

            </div>
        </section>
@endsection
