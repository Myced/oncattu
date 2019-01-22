@extends('layouts.site')

@section('title')
    {{ __(" - Home") }}
@endsection 

@section("content")
    <main class="main">

        <section class="home-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li class="has-overlay">
                        <img src="/site/img/slide_image_1.png" alt="Slide 1" />
                        <div class="slider-content text-center">
                            <div class="container">
                                <h2> ONCATTU </h2>
                                <p> 
                                    Empowerment for a Better Future
                                </p>
                                <a class="btn primary-btn"> 
                                    KNOW MORE 
                                    <i class="fa fa-angle-right"></i> 
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="has-overlay">
                        <img src="/site/img/slide_image_2.png" alt="Slider 2" />
                        <div class="slider-content text-center">
                            <div class="container">

                                <h2>FAST ONLINE LEARNING</h2>
                                <p> 
                                    Quick and easy online learning. Try it out!!!!
                                </p>
                                <a class="btn primary-btn"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </li>
                    <li class="has-overlay">
                        <img src="/site/img/slide_image_3.png" alt="Slider 3" />
                        <div class="slider-content text-center">
                            <div class="container">

                                <h2>ONCATTU </h2>
                                <p> 
                                    Shaping the Future for your child
                                </p>
                                <a class="btn primary-btn"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <section class="home-ceo">
            <div class="container">
                <div class="row m-t-20 m-b-20">

                    <!-- tutorial -->
                    <div class="col-md-3 col-sm-6 col-xs-12 m-t-10">
                        <div class="feature-box">
                            <h3 class="sans-serif text-color-primary text-center">
                                Campus Tutorials
                            </h3>

                            <p class="text-justified">
                                <br>
                                Oncatu Campus Tutorials Provides online tutorial classes 
                                for students in the university in all programs offer. 
                                This gives practical tutorial trainings in all courses 
                                offer by the university
                            </p>

                            <p>
                                <br>

                                <a href="{{ route('tuts.index') }}" class="btn btn-primary">
                                    Join Us
                                </a>
                            </p>

                        </div>
                    </div>
                    <!-- end of tutorial -->

                    <!-- prep -->
                    <div class="col-md-3 col-sm-6 col-xs-12 m-t-10">
                        <div class="feature-box">
                            <h3 class="sans-serif text-color-primary text-center">
                                Oncatu Prep
                            </h3>

                            <p class="text-justified">
                                <br>
                                Oncatu Prep provides you with preparatory classes 
                                training for all concours. This concour includes, Enam, Enset,ENS, Customs, Police,Foresty, SRN, CUSS, etc...
                            </p>

                            <p>
                                <br>

                                <a href="{{ route('preps.index') }}" class="btn btn-primary">
                                    Join Us
                                </a>
                            </p>

                        </div>
                    </div>
                    <!-- emd of prep -->

                    <!-- skills -->
                    <div class="col-md-3 col-sm-6 col-xs-12 m-t-10">
                        <div class="feature-box">
                            <h3 class="sans-serif text-color-primary text-center">
                                Oncatu Skills
                            </h3>

                            <p class="text-justified">
                                <br>
                                Oncatu skills provides practical soft skill training anytime, 
                                anywhere from national and international professional trainers. 
                                Get empowered and Get skilled
                            </p>

                            <p>
                                <br>

                                <a href="{{ route('preps.index') }}" class="btn btn-primary">
                                    Join Us
                                </a>
                            </p>

                        </div>
                    </div>
                    <!-- end of skills -->

                    <!-- library -->
                    <div class="col-md-3 col-sm-6 col-xs-12 m-t-10">
                        <div class="feature-box">
                            <h3 class="sans-serif text-color-primary text-center">
                                Oncatu Library
                            </h3>

                            <p class="text-justified">
                                <br>
                                Oncatu-Library provides digital text-book library for all subjects for students in the secondary, high schools and university level at editions.
                                Try it out and see.
                            </p>

                            <p>
                                <br>

                                <a href="{{ route('library.index') }}" class="btn btn-primary">
                                    Join Us
                                </a>
                            </p>

                        </div>
                    </div>
                    <!-- end of libary -->

                </div>
            </div>
        </section>

        <section class="home-company">
            <div class="container">
                <div class="row company">
                    <div class="col-md-5 col-sm-8">
                        <div class="company-details">
                            <h2 class="company-title color-title"> About ONCATTU </h2>
                            <h4 class="company-subtitle subtitle"> 
                                Empowerment for A Better Future
                            </h4>
                            <p> 
                                Due to the High rate of increased technology, ONCATTU was founded 
                                to bridge the gap between students and learning. It was created 
                                for those who cannot afford the time to go to school and also 
                                tho who will prefer to study from the comfort of their homes. 
                            </p>
                            <a href="#" class="btn btn-primary" role="button"> READ MORE</a>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12">
                        <div class="company-image">
                            
                            <div class="img-right hover-effect">
                                <img src="/site/images/company-image1.jpg" alt="Company Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-ceo">
            <div class="container">
                <div class="row ceo">
                    <div class="col-md-6">
                        <div class="ceo-photo">
                            <img src="/site/images/ceo.png" alt="CEO" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ceo-details">
                            <h2 class="ceo-title color-title"> WORD FROM CEO </h2>
                            <h4 class="ceo-subtitle subtitle"> READ THE MESSAGE FROM OUR CEO </h4>
                            <p> 
                                I am grateful that you have taken the first step to vist our site.
                                I encourage you to sign up and enjoy the services we have to offer.
                                ONCATTU was built for you and we hope you enjoy it
                            </p>
                            <p>
                                We hope you have a good stay here. If you have any problem don't hesitate to <a href="{{route('contact')}}">Contact Us</a>. We will get backt to 
                                you as soon as possible. Or you can email us at 
                                <a href="mailto::info@oncattu.com">info@oncattu.com</a>
                            </p>
                            <h4 class="ceo-sign"> 
                                <img src="/site/images/ceo-sign.png" alt="signature" /> 
                            </h4>
                            <p class="ceo-name">T N CED, CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-services">
            <div class="container">
                <div class="row services">
                    <div class="col-md-4">
                        <div class="hover-effect">
                            <img src="/site/images/services-one.jpg" alt="technology-innovation" />
                        </div>
                        <h4 class="services-title-one subtitle">TECHNOLOGY &amp; INNOVATION</h4>
                        <p>Professionally drive clicks-and-mortar web readiness after progressive e-commerce. Dramatically unleash cross functional.</p>
                        <a href="#" class="btn btn-default btn-normal">Read More</a>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-effect">
                            <img src="/site/images/services-two.jpg" alt="our-operations" />
                        </div>
                        <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                        <p>Energistically productize wireless mindshare for emerging experiences. Myocardinate enabled alignments and magnetic scenarios. </p>
                        <a href="#" class="btn btn-default btn-normal">Read More</a>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-effect">
                            <img src="/site/images/services-three.jpg" alt="social-resposibility" />
                        </div>
                        <h4 class="services-title-one subtitle">SOCIAL RESPONIBILITY</h4>
                        <p>Globally incubate principle-centered e-markets with standards compliant catalysts for change. Efficiently extend highly efficient products.</p>
                        <a href="#" class="btn btn-default btn-normal">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-links">
            <div class="container">
                <div class="row links">
                    <div class="col-md-2">
                        <h4 class="links-title subtitle">Quick Links</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary" role="button">TUTORIALS</a>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary" role="button">PREPS</a>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary" role="button">SKILLS</a>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary" role="button">LIBRARY</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-stats">
            <div class="container">
                <div class="row stats">
                    <div class="col-md-3 col-xs-6">
                        <img src="/site/images/globe.png" alt="" />
                        <div class="stats-info">
                            <h4 class="counter">3000</h4>
                            <p>Content Avialable</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <img src="/site/images/friends.png" alt="" />
                        <div class="stats-info">
                            <h4 class="counter">10000</h4>
                            <p>Registered Users</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <img src="/site/images/fire.png" alt="" />
                        <div class="stats-info">
                            <h4 class="counter">126</h4>
                            <p>Refineries &amp; Operations</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <img src="/site/images/badge.png" alt="" />
                        <div class="stats-info">
                            <h4 class="counter">35</h4>
                            <p>Awards &amp; Recognitions</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="home-services-other">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-services-other title-2">SERVICES</h2>
                    
                </div>

                <div class="row services-other">
                    
                </div>

            </div>
        </section>

        <section class="home-testimonials">

            <div class="container">
                <div class="section-title text-center">
                    <h2 class="subtitle-testimonials title-2">TESTIMONIALS</h2>
                    <div class="spacer-50"> </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                        <h4 class="client-name">Calvin Sims</h4>
                        <p class="designation">Marketing Head, ABC Chemicals</p>
                    </div>

                    <div class="col-md-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                        <h4 class="client-name">Bertha Gonzales</h4>
                        <p class="designation">Divisional Manager, Corpo Inc.</p>
                    </div>

                    <div class="col-md-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                        <h4 class="client-name">Brianna Hernandez</h4>
                        <p class="designation">Founder &amp; CEO, Marine Engineering</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="home-partners">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="subtitle-testimonials title-2"> OUR PARTNERS </h2>
                    <div class="spacer-20"> </div>
                </div>

                <div class="row partners">
                    <div class="logo-slides slides owl-carousel">
                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner1.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner2.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner3.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner4.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner1.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner2.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner3.png" alt="Partner Image 1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="partner-images">
                                <img src="/site/images/partner4.png" alt="Partner Image 1">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection