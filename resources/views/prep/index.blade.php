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
                    Our list of Preps
                </p>
            </div>
            <!-- Page Title -->

            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Preps </span>
                </div>
            </div>
            <!-- Breadcrumbs -->

            <!-- search form -->

            <div class="container">
                <br>

                <div class="row m-10">
                    <div class="col-sm-12">
                        <form action="{{ route('tuts.search') }}" autocomplete="off" class="    form-horizontal"
                            method="get" accept-charset="utf-8">

                            <label for="searchtext">Search for tutorials: </label>
                            <div class="input-group">
                                <input name="keyword" value="" class="form-control input-search" placeholder="Search..." type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" id="addressSearch">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </span>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!-- end of search form  -->

            <!-- tutorials section -->
            <section class="home-ceo">
                <div class="container">
                    <div class="row m-b-20">

                        @if(count($preps) == 0)
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <br>
                                <h2 class="textColorPrimary">
                                    <!-- <i class="fa fa-thumbs-down"></i> -->
                                    No PREPS at This time
                                </h2>

                                <br><br>
                            </div>

                        </div>
                        @else
                        <div class="row text-center" >

                            @foreach($preps as $prep)
                                <!-- tutorial item -->
                                <div class="col-md-4 col-sm-6 col-xs-12 m-t-10">
                                    <div class="feature-box">
                                        <a href="{{ route('tut.details', ['slug' => $prep->slug]) }}"
                                            class="hover-effect">
                                            <img src="/{{ $prep->thumbnail }}" alt="Prep Image" />
                                        </a>

                                        <h4 class="subtitle services-title-one">
                                            {{ $prep->name }}
                                        </h4>

                                        <p>

                                            By
                                            <strong class="text-dark">
                                                {{ $prep->fascilitator }}
                                            </strong>
                                        </p>

                                        <p class="text-right">

                                            <a class="btn btn-primary"
                                            href="{{ route('prep.details', ['slug' => $prep->slug]) }}" >
                                                Details
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end of tutorial item -->
                            @endforeach

                        </div>
                        @endif



                    </div>
                </div>
            </section>
            <!-- end of tutorials section -->


    </main>

    <!-- Tutorials sections -->
@endsection
