
@extends('master')

@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/2.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Sign In</h1>
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
                        <form method="POST" id='contact_form' action="{{ route('register') }}">
                            @csrf

                            <div id="step-2" class="row">
                                <h4 class="justify-content-center d-flex">Sign Up</h4>

                                <div class="col-md-12">

                                    <div>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder=" Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder=" phone number" value="{{ old('phone') }}" required autocomplete="phone">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div>
                                        <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder=" Password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation" placeholder="Confirm Password " required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <p id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                    </p>
                                </div>
                            </div>
                        </form>
                        <div id='success_message' class='success'>Your reservation has been sent successfully.</div>
                        <div id='error_message' class='error'>Sorry, error occured this time sending your message.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
