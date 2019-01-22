<nav class="navbar-page navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="logo-brand" href="#myPage">
        <img src="/images/ONCATU.png" class="img-responsive" alt="ONCATU">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="page-nav-right">
      <ul class="nav page navbar-nav navbar-right">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('tuts.index') }}">Tutorials</a></li>
            <li><a href="{{ route('preps.index') }}">Preps</a></li>
            <li><a href="{{ route('library.index') }}">Books</a></li>
            <li><a href="{{ route('tutor.index') }}">Tutor</a></li>
            <li><a class="active" href="/oncatu/about-us">About us</a></li>
            <li><a href="/oncatu/contact">Contact</a></li>
            <li><a href="#eng"><img src="/images/united-kingdom.png" width="24" alt="English"></a></li>
            <li><a href="#fre"><img src="/images/france.png" width="24" alt="French"></a></li>
      </ul>
    </div>
  </div>
</nav>
