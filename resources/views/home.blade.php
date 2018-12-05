@extends('layouts.home')

@section('content')
    <div class="overlay"></div>
        <div class="carousel fade-carousel carousel-fade slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
          <!-- Overlay -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#myPage">
                            <img src="images/ONCATU.png" width="240" alt="ONCATU">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#eng"><img src="images/united-kingdom.png" width="24" alt="English"></a></li>
                            <li><a href="#fre"><img src="images/france.png" width="24" alt="French"></a></li>
                            <!-- <li><a href="#portfolio">PORTFOLIO</a></li>
                            <li><a href="#pricing">PRICING</a></li>
                            <li><a href="#contact">CONTACT</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <hgroup>
                <h1>ONCATU</h1>
                <h3>Empowerement for better Performance</h3>
            </hgroup>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">
            <hgroup>
                <h1>ONCATU</h1>
                <h3>Empowerement for better Performance</h3>
            </hgroup>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">
            <hgroup>
                <h1>ONCATU</h1>
                <h3>Empowerement for better Performance</h3>
            </hgroup>
          </div>
        </div>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="services" class="container-fluid text-center">
      <div class="row text-center slideanim">
        <div class="col-sm-3">
            <h3 class="textColorPrimary">Campus Tutorials</h3><br>
            <h4>
                Oncatu Campus Tutorials Provides online
                tutorial classes for students in the university in
                all programs offer. This gives practical tutorial
                trainings in all courses offer by the university
            </h4>
            <a href="/oncatu/oncatu-tuts/" class="btn btn-lg btn-primary" role="button">Join us</a>
        </div>
        <div class="col-sm-3">
            <h3 class="textColorPrimary">Oncatu - DTBL</h3><br>
            <h4>
                Oncatu-DTBL provides digital text-book
    library for all subjects for students in the
    secondary, high schools and university level
    at editions
            </h4>
            <a href="/oncatu/oncatu-lib/" class="btn btn-lg btn-primary" role="button">Join us</a>
        </div>
        <div class="col-sm-3">
            <h3 class="textColorPrimary">Oncatu Skills</h3><br>
            <h4>
            Oncatu skills provides practical soft skill training anytime, anywhere from national and international professional trainers Get trained Get Equiped, Get empowered and Get skilled
            </h4>
            <a href="/oncatu/oncatu-skills/" class="btn btn-lg btn-primary" role="button">Join us</a>
        </div>
        <div class="col-sm-3">
            <h3 class="textColorPrimary">Oncatu Prep</h3><br>
            <h4>
            oncatu prep provides you with preparatory
    classes training for all concours. This concour
    includes, Enam, Enset,ENS, Customs, Court
    Clerks, Police,Foresty, SRN, CUSS and many
    more...
            </h4>
            <a href="/oncatu/oncatu-preps/" class="btn btn-lg btn-primary" role="button">Join us</a>
        </div>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="tutorial" class="container-fluid text-center bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <h2>Find a Tutor</h2>
            </div>
            <div class="col-sm-8">
                <h4>
                Tutors for all subjects from class one to six and form one to
    uppersixth
                </h4>
            </div>
        </div>
      <div class="row text-center slideanim">
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="images/math_image.jpeg" alt="Paris" width="400" height="300">
            <a href="#" id="course"><strong>Mathematics</strong></a><br>
            <a href="#" id="tutorial">ACC 201 Principle of Accounting</a><br>
            <a href="#" id="tutor">By Mr. Asen Jevis</a><br>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="images/math_image.jpeg" alt="New York" width="400" height="300">
            <a href="#" id="course"><strong>Mathematics</strong></a><br>
            <a href="#" id="tutorial">ACC 201 Principle of Accounting</a><br>
            <a href="#" id="tutor">By Mr. Asen Jevis</a><br>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="images/math_image.jpeg" alt="San Francisco" width="400" height="300">
            <a href="#" id="course"><strong>Mathematics</strong></a><br>
            <a href="#" id="tutorial">ACC 201 Principle of Accounting</a><br>
            <a href="#" id="tutor">By Mr. Asen Jevis</a><br>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="images/math_image.jpeg" alt="San Francisco" width="400" height="300">
            <a href="#" id="course"><strong>Mathematics</strong></a><br>
            <a href="#" id="tutorial">ACC 201 Principle of Accounting</a><br>
            <a href="#" id="tutor">By Mr. Asen Jevis</a><br>
          </div>
        </div>
      </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
      <h2>BECOME A TUTOR</h2>
      <div class="row slideanim">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
          <h3>PRIVATE TUTOR</h3>
          <p class="text-explain">Create your accounts and
    provide your students will
    practical tutorial at their
    fingertips</p>
            <a href="/oncatu/tutor/signup" class="btn btn-primary btn-lg">REGISTER</a>
        </div>
        <div class="col-sm-3">
          <h3>GROUP TUTOR</h3>
          <p class="text-explain">
              Build a Tutor Network and
    provide your students with
    practical tutorial from a team of
    competent tutors at their
            </p>
            <a href="/oncatu/tutor/signup" class="btn btn-primary btn-lg">REGISTER</a>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>


    <!-- Container (About Section) -->
    <div id="about" class="container-fluid bg-grey">
      <div class="row">
        <div class="col-sm-6">
          <h2>About Company Page</h2><br>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <br><a href="/oncatu/contact" class="btn btn-primary btn-lg">Get in Touch</a>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Our Team</h2>
                </div>
                <div class="col-sm-6">
                    <h2>Founder</h2>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Testimonial Section -->
    <div id="testimonial" class="container-fluid text-center">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h2>Student's Testimonial</h2>
                <div id="student" class="carousel slide text-center" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner testimonial" role="listbox">
                    <div class="item active">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                    </div>
                    <div class="item">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                    </div>
                    <div class="item">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                    </div>
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#student" data-slide-to="0" class="active"></li>
                        <li data-target="#student" data-slide-to="1"></li>
                        <li data-target="#student" data-slide-to="2"></li>
                    </ol>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#student" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#student" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Tutor's Testimonial</h2>
                <div id="tutor" class="carousel slide text-center" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#tutor" data-slide-to="0" class="active"></li>
                    <li data-target="#tutor" data-slide-to="1"></li>
                    <li data-target="#tutor" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner testimonial" role="listbox">
                    <div class="item active">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                    </div>
                    <div class="item">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                    </div>
                    <div class="item">
                        <img src="images/profile_image.jpg" width="48" class="img-circle" alt="user's image">
                        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#tutor" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#tutor" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
@endsection
