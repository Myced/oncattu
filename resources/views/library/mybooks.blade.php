@extends('layouts.site')

@section('content')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> My Books </h2>
            <p class="description light"> 
                List of all your Books
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> Library </span>

                <i class="fa fa-chevron-right"></i>

                <span class="child"> My Books </span>
            </div>
        </div>


        <div class="container container-padding bg-grey">
            <br><br>
            <div class="row text-center">
                <div class="col-sm-4 user-info">
                    <p class="text-dark">
                        Name: 
                        <span class="user-value"> {{ auth()->user()->name }}</span>
                    </p>

                    <p class="text-dark">
                        Gender: 
                        <span class="user-value">

                        @if(auth()->user()->sex == 'M')
                            {{ __('Male') }}
                        @else
                            {{ __('Female') }}
                        @endif
                        </span>
                    </p>

                    <p class="text-dark">
                        Location: 
                        <span class="user-value">
                        {{ auth()->user()->location }}
                    
                        </span>
                    </p>
                </div>

                <div class="col-sm-4 user-info">
                    <p class="text-dark">Contact:
                        <span class="user-value">
                                {{ auth()->user()->tel1 }}

                                @if(auth()->user()->tel2 != '' || auth()->user()->tel2 != null )
                                    {{ __(' / ') }}
                                    {{ auth()->user()->tel2 }}
                                @endif
                            
                        </span>
                    </p>

                    <p class="text-dark">
                        Email:
                        <span class="user-value">
                            {{ auth()->user()->email }} 
                        </span>
                    </p>


                    <!--<p>Location: <span class="user-v</span>alue"><u>Dirty South Buea</u></span></p>-->
                </div>

                <div class="col-sm-4">
                    <img src="/{{ auth()->user()->avatar }}" alt="profile image" height="240" class="img-circle">
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('library.index') }}" class="btn btn-outline-info btn-rounded">
                        <i class="fa fa-chevron-left"></i>
                        Books
                    </a>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-dark f-16">
                            <tr>
                                <th>S/N</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Edition</th>
                                <th>Action</th>
                            </tr>

                            @if(count($myBooks) == 0)
                            <tr>
                                <th colspan="7" class="text-center">
                                    <strong class="text-primary">
                                        You have not bought any books
                                    </strong>
                                </th>
                            </tr>
                            @else 
                                <?php $count = 1; ?>

                                @foreach($myBooks as $mybook)
                                    <tr>
                                        <td> {{ $count++ }} </td>
                                        <th>
                                            {{ $mybook->book()->title }}
                                        </th>

                                        <td>
                                            {{ $mybook->book()->author }}
                                        </td>

                                        <td>
                                            {{ $mybook->book()->edition }}
                                        </td>

                                        <td>
                                            <a href="{{ route('book.read', ['slug' => $mybook->book()->slug]) }}" 
                                                class="btn btn-color-primary btn-rounded">
                                                Read Book
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

    
@endsection
