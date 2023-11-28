@extends('master')

@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/2.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Profile Edit</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="de-content-overlay">
                        {{-- <form name="contactForm" id='contact_form' method="post"> --}}
                        <form method="POST" id='contact_form' action="{{ route('profile.update') }}">
                            @csrf

                            <div id="step-2" class="row">
                                <h4 class="justify-content-center d-flex">Edit Profile</h4>

                                <div class="col-md-12">
                                    <label for="name">Name</label>

                                    <div>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder=" Name" value="{{auth()->user()->name}}" required >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="email">Email</label>

                                    <div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" Email" value="{{auth()->user()->email}}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                    <label for="phone">Mobile Number</label>

                                    <div>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder=" phone number" value="{{auth()->user()->phone}}" required>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="col-md-12">
                                    <p id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Update' class="btn btn-line">
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>



@endsection
