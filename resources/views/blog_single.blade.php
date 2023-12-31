@extends('master')

@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/4.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- float text begin -->
    <div class="float-text">
        <div class="de_social-icons">
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="#">Book Now</a></span>
    </div>
    <!-- float text close -->

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mt-4 text-center">
                    <h1>The Best Advice You Could Ever Get About Hotel</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
            <div class="row g-5">
                <div class="col-md-10 offset-md-1">
                    <div class="de-post-read">
                            <div class="post-content">

                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</blockquote>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                </div>
                            </div>

                            <div class="post-meta"><span><i class="fa fa-user id-color"></i>By: <a href="#">Lynda Wu</a></span> <span><i class="fa fa-tag id-color"></i><a href="#">News</a>, <a href="#">Events</a></span> <span><i class="fa fa-comment id-color"></i><a href="#">10 Comments</a></span></div>

                            <div class="spacer-single"></div>

                            <div id="blog-comment">
                        <h3>Comments (5)</h3>

                        <div class="spacer-half"></div>

                        <ol>
                            <li>
                                <div class="avatar">
                                    <img src="{{ asset('assets/frontend/images/ui/avatar.jpg') }}" alt=""></div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">8 August 2018</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/ui/avatar.jpg" alt=""></div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">8 August 2018</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="avatar">
                                    <img src="images/ui/avatar.jpg" alt=""></div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">8 August 2018</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/ui/avatar.jpg" alt=""></div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">8 August 2018</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="avatar">
                                    <img src="images/ui/avatar.jpg" alt=""></div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">8 August 2018</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                            </li>
                        </ol>

                        <div class="spacer-single"></div>

                        <div id="comment-form-wrapper">
                            <h3>Leave a Comment</h3>
                            <div class="comment_form_holder">
                                <form id="contact_form" name="form1" method="post" action="#">

                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control">

                                    <label>Email <span class="req">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control">
                                    <div id="error_email" class="error">Please check your email</div>

                                    <label>Message <span class="req">*</span></label>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                    <div id="error_message" class="error">Please check your message</div>
                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-line"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
