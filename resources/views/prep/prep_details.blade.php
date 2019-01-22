@extends('layouts.site')

@section('title')

	 - {{ $prep->name }}
@endsection

@section('content')
	<main class="main">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> {{ $prep->name }} </h2>
            <p class="description light">

            </p>
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="parent"> <a href="{{ route('preps.index') }}"> Preps </a> </span>
                <i class="fa fa-chevron-right"></i>
                <span class="child"> {{ $prep->name }} </span>
            </div>
        </div>

        <section class="services-hood">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hood">
                        <div class="service-slider">
                            <ul class="slidess">
                                <li>
                                    <img src="/{{ $prep->thumbnail }}" alt="">
                                    <div class="slider-caption">
                                        <p> {{ $prep->name }} </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="hood-subtitle subtitle">
	                        {{ $prep->name }}
	                    </h4>
                        <p>
	                        <?php echo nl2br($prep->description); ?>
	                    </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="about-accordion">
            <div class="container">

            	<div class="row">
            		<div class="col-md-12">
            			<h2 class="page-header serif text-color-primary">Prep Content</h2>
            		</div>
            	</div>

            	<div class="row publications">
	                <div class="col-md-8">
	                	<div class="panel-group" id="accordion">

	                		<?php $count = 1; ?>
		                    @foreach($prep->content as $content)
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

	                <!-- prep info -->
	                <div class="col-md-4">

                        <div class="sidebar-blog-categories">
                            <ul>
                                <li>
                                	<a href="javascript:void(0)">
                                		Price :
                                		<strong>
                                			{{ number_format($prep->price) }} FCFA
                                		</strong>
                                	</a>
                                </li>

                                <li>
                                	<a href="javascript:void(0)">
                                		Area : <strong>{{ $prep->area }}</strong>
                                	</a>
                                </li>

                            </ul>
                        </div>

	                </div>
	                <!-- prep info -->

	            </div>
	            <br><br>

	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="">

	            			<a href="{{ route('preps.index') }}" class="btn btn-outline-info btn-rounded pull-left">
	            				<i class="fa fa-chevron-left"></i>
	            				Back to Preps
	            			</a>

	            			<a href="{{ route('prep.enroll', ['slug' => $prep->slug]) }}" class="btn btn-color-primary btn-rounded pull-right">
	            				<i class="fa fa-check"></i>
	            				Enroll to Prep
	            			</a>


	            		</div>

	            	</div>
	            </div>
	            <br><br><br>

            </div>
        </section>



    </main>
@endsection
