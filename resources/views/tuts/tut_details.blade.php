@extends('layouts.site')

@section('title')

	 - {{ $tutorial->name }}
@endsection

@section('content')
	<main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> {{ $tutorial->name }} </h2>
            <p class="description light">

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
                        <h4 class="hood-subtitle subtitle">
	                        {{ $tutorial->name }}
	                    </h4>
                        <p>
	                        <?php echo nl2br($tutorial->description); ?>
	                    </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="about-accordion">
            <div class="container">

            	<div class="row">
            		<div class="col-md-12">
            			<h2 class="page-header serif text-color-primary">Course Content</h2>
            		</div>
            	</div>

            	<div class="row publications">
	                <div class="col-md-8">
	                	<div class="panel-group" id="accordion">

	                		<?php $count = 1; ?>
		                    @foreach($tutorial->content as $content)
		                    	<div class="panel panel-default">
			                        <div class="panel-heading">
			                            <h4 class="panel-title">
			    							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$count}}">
			    								{{ $content->name }} - {{ $content->title }}
			    							</a>
										</h4>
			                        </div>
			                        <div id="collapse{{$count++}}" class="panel-collapse collapse">
			                            <div class="panel-body">
			                                <p>
				                                <<?php echo nl2br($content->description); ?>
				                            </p>
			                            </div>
			                        </div>
			                    </div>
		                    @endforeach

		                </div>
	                </div>

	                <!-- tutorial info -->
	                <div class="col-md-4">

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

	            </div>
	            <br><br>

	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="">

	            			<a href="{{ route('tuts.index') }}" class="btn btn-outline-info btn-rounded pull-left">
	            				<i class="fa fa-chevron-left"></i>
	            				Back to Tutorials
	            			</a>

	            			<a href="{{ route('tut.enroll', ['slug' => $tutorial->slug]) }}" class="btn btn-color-primary btn-rounded pull-right">
	            				<i class="fa fa-check"></i>
	            				Enroll to Course
	            			</a>


	            		</div>

	            	</div>
	            </div>
	            <br><br><br>

            </div>
        </section>



    </main>
@endsection
