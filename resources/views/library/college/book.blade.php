@extends('layouts.site')

@section('title')
   - {{ $book->title }}
@endsection

@section('content')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> {{$book->title}} </h2>
            <p class="description light"> 
                
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> <a href="{{ route('library.index') }}">Books</a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> {{ $book->title }} </span>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    
                    <div id="seach-section">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="#" autocomplete="off" class="form-horizontal" method="post" accept-charset="utf-8">

                                    <label for="searchtext">Search for Book: </label>
                                    <div class="input-group">
                                        <input name="searchtext" value="" class="form-control" placeholder="Search..." type="text">
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
                </div>
            </div>
            <!-- //row for book details  -->

            <div class="row m-10">

                <div class="col-sm-8">
                    <!-- Tutorials sections -->
                    <br>
                    <div class="row m-10">
                        <div class="col-md-12">
                            <a href="{{ route('college.library') }}" class="f-20">
                                <i class="fa fa-chevron-left"></i>
                                Back to Books
                            </a>
                        </div>
                    </div>
                    <br>

                    <div class="row ">
                        <div class="col-sm-6 text-center">
                            <div class="feature-box">
                                
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

                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-6">

                            <!-- start of book details -->
                            <div class="row m-t-10">
                                <div class="col-md-12">
                                    <div class="sidebar-blog-categories">
                                        <ul>
                                            <li> 
                                                <a href="javascript:void(0)"> 
                                                    Title : 
                                                    <strong>
                                                        {{ $book->title }} 
                                                    </strong> 
                                                </a> 
                                            </li>

                                            <li> 
                                                <a href="javascript:void(0)"> 
                                                    Edition : <strong>{{ $book->edition}} </strong> 
                                                </a> 
                                            </li>

                                            <li> 
                                                <a href="javascript:void(0)"> 
                                                    Author : <strong>{{ $book->author }} </strong> 
                                                </a> 
                                            </li>

                                            <li> 
                                                <a href="javascript:void(0)"> 
                                                    Book Type : <strong>{{ $book->type }}</strong>  
                                                </a> 
                                            </li>

                                            <li> 
                                                <a href="javascript:void(0)"> 
                                                    Price : <strong>{{ number_format($book->price) }} FCFA </strong>  
                                                </a> 
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end of details -->


                        </div>

                    </div>

                    <!-- next row in first column -->
                    <div class="row m-t-10">
                        <div class="col-md-12 m-10">
                            <h3 class="text-color-primary sans-serif bb-primary text-bold">
                                Book Description
                            </h3>
                        </div>

                        <div class="col-md-12 m-10">
                            <div class="text-dark f-20">
                                @if(empty($book->description))
                                    {{ __("No Description") }}
                                @else 
                                    <?php echo nl2br($book->description) ?>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- end of next row  -->

                </div>

                <div class="col-sm-4">
                    <h3 class="sans-serif text-color-primary bb-primary text-bold">
                        Payment Options
                    </h3>
                    
                    <div class="row m-20">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-dark">
                                        <th>Book Title</th>
                                        <th>Author</th>
                                        <th>Edition</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-dark">                                
                                        <td> {{ $book->title }} </td>
                                        <td> {{ $book->author }} </td>
                                        <td> {{ $book->edition }} Edition</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row m-t-10">
                                <h2>Subscription Fee</h2>
                                <span class="text-bold text-color-primary sans-serif f-20"> 
                                    {{ number_format($book->price) }} FCFA
                                </span>
                            </div>
                            <div class="row m-t-10">
                                <h3>Select Payment option</h3>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('college.book.buy.momo', ['slug' => $book->slug]) }}" 
                                            class="btn btn-outline-momo btn-block btn-mtn">
                                            Mobile Money
                                        </a>

                                        <br><br>
                                        <a href="javascript:void(0)" class="btn btn-block btn-orange">
                                            Orange Money
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>


@endsection
