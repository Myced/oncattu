<div class="row logo-top-info">
    <div class="container">
        <div class="col-md-3 logo">
            <!-- Main Logo -->
            <a href="/"><img src="/site/img/logo.png" alt="Offshore Logo" /></a>
            <!-- Responsive Toggle Menu -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only"> Main Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="col-md-9 top-info-social">
            <div class="pull-right">
                <div class="top-info">
                    <div class="call">
                        <h3 class="text-color-primary"> CALL US </h3>
                        <p> +237 673 90 19 39</p>
                    </div>
                    <div class="email">
                        <h3 class="text-color-primary"> EMAIL US </h3>
                        <p> info@oncattu.com </p>
                    </div>
                    <div class="market">
                        @if(auth()->user())
                            <a href="#" class="btn btn-color-primary btn-rounded">
                                My Account
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-color-primary btn-rounded">
                                Login
                            </a>
                        @endif
                    </div>
                </div>
                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation Section -->
<nav id="navbar" class="collapse navbar-collapse main-menu">
	<div class="container">
		<ul class="main-menu">
			<li class="active"> <a href="/"> Home </a></li>
			<li><a href="{{ route('tuts.index') }}"> Tutorials </a> </li>
			<li><a href="{{ route('preps.index') }}"> Prep </a> </li>
			<!-- <li><a href="blog.html"> Skills </a> </li> -->
			<li><a href="{{ route('library.index') }}"> Library </a> </li>

			<li><a href="{{ route('about-us') }}"> About Us </a> </li>
			<li><a href="{{ route('contact') }}"> CONTACT </a> </li>

            @if(auth()->user())
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        My Account
                        <i class="fa fa-chevron-down dropdown-toggle"> </i>
                    </a>
                    <ul>
                        <li> <a href="{{ route('mytuts') }}"> My Tutorials </a> </li>
                        <li> <a href="{{ route('mypreps') }}"> My Preps </a> </li>
                        <li> <a href="{{ route('mybooks') }}"> My Books </a> </li>
                        <!-- <li> <a href="shortcodes.html"> My Skills </a> </li> -->
                        <li> <a href="shortcodes.html"> Profile </a> </li>
                        <li> <a href="404.html"> Change Password </a> </li>
                        <li> <a href="blank-page.html"> Logout </a> </li>
                    </ul>
                </li>
            @else
                <li><a href="{{ route('login') }}"> Login </a> </li>
            @endif

		</ul>
	</div>
</nav>
