@extends('layouts.site')

@section('title')

    {{ __(" - Tutorials") }}
@endsection

@section('content')

    <main class="main">
        <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Tutorials </h2>
                <p class="description light">
                    Our list of Unlimited tutorials
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
                            <!-- div class="input-group">
                                <label class="radio-inline">
                                    <input type="radio" name="option" checked value="campus">By Campus
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="program">By Program
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="level">By Level
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="tutor">By Tutor
                                </label>
                            </div> -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- end of search form  -->

            <!-- tutorials section -->
            <section class="home-ceo">
                <div class="container">
                    <div class="row m-b-20">

                        @if(count($tuts) == 0)
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <br>
                                <h2 class="textColorPrimary">
                                    <!-- <i class="fa fa-thumbs-down"></i> -->
                                    No Tutorials at this time
                                </h2>

                                <br><br>
                            </div>

                        </div>
                        @else
                        <div class="row text-center">

                            @foreach($tuts as $tut)
                                <!-- tutorial item -->
                                <div class="col-md-4 col-sm-6 col-xs-12 m-t-10">
                                    <div class="feature-box">
                                        <a href="{{ route('tut.details', ['slug' => $tut->slug]) }}"
                                            class="hover-effect">
                                            <img src="/{{ $tut->thumbnail }}" alt="Tutorial Image" />
                                        </a>

                                        <h4 class="subtitle services-title-one">
                                            {{ $tut->name }}
                                        </h4>

                                        <p>
                                            <strong>
                                               {{ $tut->campus }},
                                               Level {{ $tut->level }}
                                            </strong>

                                            <br>
                                            By
                                            <strong class="text-dark">
                                                {{ $tut->teacher->name }}
                                            </strong>
                                        </p>

                                        <p class="text-right">

                                            <a class="btn btn-primary"
                                            href="{{ route('tut.details', ['slug' => $tut->slug]) }}" >
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
