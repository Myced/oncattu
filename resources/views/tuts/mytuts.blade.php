@extends('layouts.site')

@section('content')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> My Tutorials </h2>
            <p class="description light"> 
                List of all your subscribed Tutorials
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> Tutorials </span>

                <i class="fa fa-chevron-right"></i>

                <span class="child"> My Tutorials </span>
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
                    <a href="{{ route('tuts.index') }}" class="btn btn-outline-info btn-rounded">
                        <i class="fa fa-chevron-left"></i>
                        Tutorials
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
                                <th>Tutorial</th>
                                <th>Tutor</th>
                                <th>Action</th>
                            </tr>

                            @if(count($mytuts) == 0)
                            <tr>
                                <th colspan="7" class="text-center">
                                    <strong class="text-primary">
                                        You have not subscribed to any tutorials
                                    </strong>
                                </th>
                            </tr>
                            @else 
                                <?php $count = 1; ?>

                                @foreach($mytuts as $tut)
                                    <tr>
                                        <td> {{ $count++ }} </td>
                                        <th>
                                            {{ $tut->Tutorial()->name }}
                                        </th>

                                        <td>
                                            {{ $tut->Tutor()->name }}
                                        </td>

                                        <td>
                                            <a href="{{ route('tut.class', ['code' => $tut->tut_code]) }}" 
                                                class="btn btn-color-primary btn-rounded">
                                                Go To Class
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
