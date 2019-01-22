@extends('layouts.site')

@section('title')

	 - {{ $tutorial->name }}
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
    </main>
@endsection