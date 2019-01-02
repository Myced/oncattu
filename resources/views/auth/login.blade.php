<!DOCTYPE html>
<html>
<head>
	<title>ONCATU Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <link rel="stylesheet" href="/css/AdminLTE.css"> -->

</head>

<body>
	<nav class="navbar-page navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" id="logo-brand" href="#myPage">
	        <img src="../images/ONCATU.png" class="img-responsive" alt="ONCATU"
	        width="100px" height="100px">
	      </a>
	    </div>
	    <div class="collapse navbar-collapse" id="page-nav-right">
	      <ul class="nav page navbar-nav navbar-right">
	            <li><a href="#eng"><img src="../images/united-kingdom.png" width="24" alt="English"></a></li>
	            <li><a href="#fre"><img src="../images/france.png" width="24" alt="French"></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br>

	<div class="jumbotron page-jumbo bg-primary">
        <h2>Oncatu Skills > Login</h2>
	</div>
	<!--<header class="header">
		<img src="ONCATU-logo.png" width="68%" height="68%">
	<nav class="select">
	</nav>
	</header>
	<br><br>
	<div class="image"></div>
	<h1><u class="title"> Welcome to Oncatus Campus Tutorials </u></h1>-->
<div class="container-fluid image textWhite18">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center">

        <h2>Oncatus Login</h2>

            <br>

            @if($errors->has('email') || $errors->has('password'))
            <div class="alert alert-danger">
                <strong>Error</strong>
                @if($errors->has('email'))
                    {{ $errors->first('email') }}
                @endif

                @if($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif
            </div>
            @endif
            <br>

            <div class="row">
                <div class="col-md-12">

                </div>
            </div>

			<form action="/login" class="form-horizontal" method="post">
                @csrf
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" placeholder="Enter email or username" name="email" size="50" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="Password" class="form-control" placeholder="Enter password" name="password" size="50" required>
					</div>
				</div>

				<h2 class="text-center"><u>Select Your Role</u></h2>
				<div>

				<div class="form-inline text-center">
					<div class="col-sm-12">
						<div class="checkbox">

							<label><input class="" type="radio" name="role" id="role1"
								value="Student" required>Student</label>
						</div> &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="radio">
							<label><input type="radio" class="" name="role" id="role"
								value="Tutor" required>Tutor</label>
						</div>
					</div>
				</div>
				</div>
				<div class="form-group text-center">
						<button	 type="submit" class="btn btn-primary btn-lg" name="login">Log in</button>
				</div>

				<a href="{{ route('register') }}" class="textWhite18">If you don't have an account: sign-up here</a><br>

				<a href="{{ route('tutor.create') }}" class="textWhite18"> Or Create Tutor Account</a><br>

				<a  class="textWhite18" href="{{ route('password.request') }}">
                    If you have forgotten your password
                </a>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<!-- footer  -->
<div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="foot-item-content">
                    <h5 class="font-head">Get to know us</h5>
                    <hr style="margin-top:10px; margin-bottom: 10px">
                    <ul class="list-unstyled ">
                        <!-- Link -->
                        <li><a href="/oncatu/about-us" >About Oncatu</a></li>
                        <li><a href="/oncatu/contact" >Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="foot-item-content">
                    <h5 class="font-head">Learn with us</h5>
                    <hr style="margin-top:10px; margin-bottom: 10px">
                    <ul class="list-unstyled ">
                        <li><a href="/oncatu/oncatu-tuts/">Home Tutoring</a></li>
                        <li><a href="/oncatu/oncatu-tuts/" >Find Subjects</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <div class="foot-item-content">
                    <h5 class="font-head">Work with us</h5>
                    <hr style="margin-top:10px; margin-bottom: 10px">
                    <ul class="list-unstyled ">
                        <!-- Link -->
                        <li><a href="/oncatu/tutor/signup">Become a Tutor </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="foot-item-content">
                    <h5 class="font-head">Connect with us</h5>
                    <hr style="margin-top:10px; margin-bottom: 10px">
                    <ul class="list-unstyled ">
                        <li><a href="http://facebook.com/oncatu" target="_blank" ><i class="fab fa-facebook-f "></i>&nbsp;Facebook</a></li>
                        <li><a href="http://twitter.com/oncatu" target="_blank"><i class="fab fa-twitter"></i>&nbsp;Twitter</a></li>

                    </ul>
                </div>
            </div>
        </div>
</div>

<footer>
    <div class="container">
        <hr>
        <div class="col-sm-12" style="font-size:14px">
            <div class="no-padding-left">
                <p class="pull-left"><a href="/oncatu/">&copy; Oncatu, Ltd.</a></p>
                <ul class="list-inline pull-right">
                    <li><a href="#">Terms of Use</a></li>

                    <li><a href="#">Policies</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- //scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.js"></script>

</body>
</html>
