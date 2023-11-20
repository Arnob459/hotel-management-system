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
                        <form name="contactForm" id='contact_form' method="post">


                            <div id="step-2" class="row">
                                <h4 class="justify-content-center d-flex">Sign In</h4>

                                <div class="col-md-12">

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                                    </div>

                                    <div id='password_error' class='error'>Wrong Password.</div>
                                    <div>
                                        <input type='text' name='password' id='password' class="form-control" placeholder="Your Password" required>
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
