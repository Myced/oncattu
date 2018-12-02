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
                    <input name="text" value="" class="form-control" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" id="addressSearch">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                </div>
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="opt" checked value="campus">By Campus
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="opt" value="program">By Program
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="opt" value="level">By Level
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="opt" value="tutor">By Tutor
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tutorials sections -->
<br>
<div class="container text-center">
    <div class="row text-center">
        <div class="col-sm-4">
            <a href="#">
                <div class="thumbnail">
                    <img src="../images/math_image.jpeg" alt="Paris" width="400" height="300">
                    <strong>Mathematics</strong><br>
                    ACC 201 Principle of Accounting<br>
                    By Mr. Asen Jevis<br>
                </div>
            </a>
        </div>

        <div class="col-sm-4">
            <a href="#">
                <div class="thumbnail">
                    <img src="../images/math_image.jpeg" alt="Paris" width="400" height="300">
                    <strong>Mathematics</strong><br>
                    ACC 201 Principle of Accounting<br>
                    By Mr. Asen Jevis<br>
                </div>
            </a>
        </div>

        <div class="col-sm-4">
            <a href="#">
                <div class="thumbnail">
                    <img src="../images/math_image.jpeg" alt="Paris" width="400" height="300">
                    <strong>Mathematics</strong><br>
                    ACC 201 Principle of Accounting<br>
                    By Mr. Asen Jevis<br>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
