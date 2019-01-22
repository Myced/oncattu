@extends('layouts.site')

@section('title')
    {{ __(" - Preps") }}
@endsection

@section('content')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> ONCATU PREP </h2>
            <p class="description light">
                All Our Preps
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> Tutorials </span>
            </div>
        </div>
    </main>


    <!-- SEARCH SECTION -->
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('tuts.search') }}" autocomplete="off" class="form-horizontal"
                method="get" accept-charset="utf-8">

                <label for="searchtext">Search for tutorials: </label>
                <div class="input-group">
                    <input name="keyword" value="" class="form-control" placeholder="Search preps..." type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" id="addressSearch">
                            <span class="fa fa-search"></span>
                        </button>
                    </span>
                </div>
            </form>
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
