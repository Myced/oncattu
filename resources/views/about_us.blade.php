@extends('layouts.site')

@section('title')

	 - About Us
@endsection

@section('content')
	<main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> About Us </h2>
            <p class="description light">

            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> About Us </span>
            </div>
        </div>

        <section class="about-culture">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 m-t-10 cul">
                        <h2 class="sans-serif text-color-primary bb-primary text-bold"> About ONCATU </h2>

                        <p class="text-dark text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <div class="col-md-6 col-xs-12 m-t-10">
                        <h2 class="sans-serif text-color-primary bb-primary text-bold"> Why We Exist </h2>

                        <p class="text-dark text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <!-- end of row -->

                <!-- next row -->
                <div class="row">
                    <div class="col-xs-12 col-md-4 m-t-10">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center text-bold text-color-primary">
                                    Our Home Presence
                                </h3>

                                <div class="contact-area-box">
                                    <h4 class="contact-title subtitle">Cameroon</h4>
                                    <div class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>Molyko - Buea
                                            <br> South West Region
                                            <br> Cameroon </p>
                                    </div>
                                    <div class="phone">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p> +237 673 90 19 39 </p>
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p><a href="mailto:info@oncatu.com"> info@oncatu.com</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center text-bold text-color-primary">
                                    International Presence
                                </h3>

                                <div class="contact-area-box">
                                    <h4 class="contact-title subtitle">Ghana</h4>
                                    <div class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>Kummassi
                                            <br> Accra
                                            <br> Ghana </p>
                                    </div>
                                    <div class="phone">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p> +237 673 90 19 39 </p>
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p><a href="mailto:info@oncatu.com"> infogh@oncatu.com</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 col-md-8 m-t-10">
                        <h3 class="text-center text-bold text-color-primary">
                            Our Team
                        </h3>

                        <div class="row leaders text-center">

                            @for($i = 1; $i < 7; $i++)
                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="/site/img/CEDRIC.JPG" alt="CEDRIC">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">T N CED</h4>
                                    <p>Web Developer</p>
                                </div>
                            @endfor


                        </div>

                    </div>
                </div>
                <!-- end of next row -->
            </div>
        </section>
    </main>
@endsection
