@extends('layouts.site')

@section('title')
    {{ __(" - College Books") }}
@endsection

@section('content')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> College Books </h2>
            <p class="description light"> 
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> College Books </span>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row m-t-10">
                <div class="col-md-8 col-sm-12">
     
                    <!-- SEARCH SECTION -->
                    <div id="seach-section">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="#" autocomplete="off" class="form-horizontal" method="post" accept-charset="utf-8">

                                    <label for="searchtext">Search for Book: </label>
                                    <div class="input-group">
                                        <input name="searchtext" value="" class="form-control input-search" placeholder="Search..." type="text">
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
                    <!-- end of search area -->

                </div>
                
            </div>

            <!-- row  -->
            <!-- Tutorials sections -->
            <div class="row  m-t-20 background-gray p-20">
                @foreach($books as $book)
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <div class="feature-box">
                            <a href="{{ route('college.library.book', ['slug' => $book->slug]) }}">
                                <div class="row">
                                    <div class="thumbnail">
                                        <img src="/{{ $book->thumbnail }}" alt="{{ $book->title }} - Image"
                                            width="100%" height="150">
                                        
                                        <br>
                                        
                                        <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-color-primary sans-serif text-bold">
                                            {{ $book->title }}
                                            ({{ $book->edition }} Edition)
                                        </h3>
                                    </div>

                                    <div class="col-md-12">
                                        <span class="text-dark f-20">
                                            By 
                                            <strong>{{ $book->author }}</strong>
                                        </span>
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-primary pull-right">
                                            More
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end row -->

        </div>
    </main>



@endsection
