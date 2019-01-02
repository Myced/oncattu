@extends('layouts.prep')

@section('content')
<br>
<div class="container container-page">
    <ul class="secondary-navbar pull-right">
        <li><a class="active" href="/oncatu/oncatu-tuts">Find Tutorial</a></li>
        <li><a href="/oncatu/oncatu-tuts/dashboard">My Courses</a></li>
        <li><a href="/oncatu/tutor">Instructor</a></li>
        <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
    </ul>
</div>

<div class="jumbotron page-jumbo bg-primary">
        <h2>Oncatu  PREP > TUTORIALS </h2>
</div>

<!-- SEARCH SECTION -->
<div id="seach-section" class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('tuts.search') }}" autocomplete="off" class="form-horizontal"
                method="get" accept-charset="utf-8">

                <label for="searchtext">Search for tutorials: </label>
                <div class="input-group">
                    <input name="keyword" value="" class="form-control" placeholder="Search preps..." type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" id="addressSearch">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tutorials sections -->
<br>
<div class="container text-center">
    @if(count($preps) == 0)
    <div class="row text-center">
        <div class="col-sm-12">
            <br>
            <h2 class="textColorPrimary">No Preps at this time</h2>
            <br><br>
        </div>

    </div>
    @else
    <div class="row text-center">

        @foreach($preps as $prep)
            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="/{{ $prep->thumbnail }}" alt="Paris" width="400" height="300">
                        <strong class="prep-title textColorPrimary">{{ $prep->area }}</strong>
                        <br>
                         <span class="prep-name textColorPrimary"> {{ $prep->name }} </span>
                        <br>
                        By {{ $prep->fascilitator }}
                        <br>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    @endif
</div>
@endsection
