@extends('layouts.site')

@section('title')
	{{ __(" - Enrol") }} - {{ $tutorial->name }}
@endsection

@section('content')
	<main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> ENROLL TO  </h2>
            <p class="description light"> 
                {{ $tutorial->name }}
            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="parent"> <a href="{{ route('tuts.index') }}"> Tutorials </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> {{ $tutorial->name }} </span>
            </div>
        </div>

        <section class="services-hood">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hood">
                        <div class="service-slider">
                            <ul class="slidess">
                                <li>
                                    <img src="/{{ $tutorial->thumbnail }}" alt="">
                                    <div class="slider-caption">
                                        <p> {{ $tutorial->name }} </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="row">
                        	
                        	<!-- tutorial info -->
			                <div class="col-md-8">
			                	
		                        <div class="sidebar-blog-categories">
		                            <ul>
		                                <li> 
		                                	<a href="javascript:void(0)"> 
		                                		Price : 
		                                		<strong>
		                                			{{ number_format($tutorial->price) }} FCFA
		                                		</strong> 
		                                	</a> 
		                                </li>

		                                <li> 
		                                	<a href="javascript:void(0)"> 
		                                		Semester : <strong>{{ $tutorial->semester }} </strong> 
		                                	</a> 
		                                </li>

		                                <li> 
		                                	<a href="javascript:void(0)"> 
		                                		Level : <strong>{{ $tutorial->level }} </strong> 
		                                	</a> 
		                                </li>

		                                <li> 
		                                	<a href="javascript:void(0)"> 
		                                		Campus : <strong>{{ $tutorial->campus }}</strong>  
		                                	</a> 
		                                </li>

		                                <li> 
		                                	<a href="javascript:void(0)"> 
		                                		Program : <strong>{{ $tutorial->program }}</strong>  
		                                	</a> 
		                                </li>

		                            </ul>
		                        </div>

			                </div>
			                <!-- tut info -->

			                <!-- payment method -->
			                <div class="col-md-4">
			                	<h3 class="page-header">
			                		Payment Method
			                	</h3>

			                	<div class="row">
			                		<div class="col-md-12">
			                			<a href="{{ route('tut.enroll.mtn', ['slug' => $tutorial->slug]) }}" 
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
			                <!-- end of payment method -->


                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection