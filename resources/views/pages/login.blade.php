@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">Sign In</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->


    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading text-center mb-50">
                            <h2>Please fill in your credentials here</h2>
                            <div class="title-border"></div><br/><br/>
                        </div>
                        <!--contact-form2-->
                        <form role="form" method="post" action="/sign/signin/process" class="ajax-form validation-engine">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="validate[required,custom[email]] form-control mb-30" name="email" id="txtEmail" type="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="validate[required] form-control mb-30" name="password" id="txtPassword" type="password" placeholder="Password *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group" style="margin-left: 15px;">
                                        <label>
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button style="color: black !important;" type="submit" class="uza-btn  btn-3 mt-15 uza-btn-log">Sign-in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Work with us -->
    <div id="c_workwithus" class="area center primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="promo-heading">Don't have an account yet?</span>
                    <a href="{{ route('signup') }}" class="btn uza-btn-3"><span>Click here Sign up</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

    <!-- Contact -->



@endsection
@section('extra_script')
@endsection
