@extends('layouts.site')

@section('title')
	{{ __("Library") }}
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
                <span class="child"> Library </span>
            </div>
        </div>

        <div class="container">
			<section class="ceo">
				<div class="row">
				    <div class="col-sm-6 m-t-10">
				    	<a href="{{ route('college.library') }}" class="img-thumbnail library p-20">
						    <div class="libraryTitle">
					             <h2 class="text-color-primary sans-serif">College Text Book Library</h2>
						    </div>

						    <div class="desc text-dark">
				    			<p class="text-dark text-justified f-16">Get all the presecribed books for the academic year
				                    from form one to uppersixth
				                    <br>
				                    All subjects from English,
				                    French, History, Economics and all other college subjects
				                </p>

				                <p class="text-right">
				                	<button class="btn btn-primary">
				                		Continue
				                		<i class="fa fa-chevron-right"></i>
				                	</button>
				                </p>
						    </div>
						</a>
				    </div>
				    <div class="col-sm-6 m-t-10">
				    	<a href="{{ route('university.library') }}" class="img-thumbnail library p-20">
						    <div class="libraryTitle">
					             <h2 class="text-color-primary sans-serif">University Text Book Library</h2>
						    </div>

						    <div class="desc">
				    			<p class="text-dark text-justified">Best university text books for all courses from level 1 to
				                    final level, Master and PHD
				                    <br>
				                    All books from authors with
				                    latest editions for all university programs ans courses
				                </p>

				                <p class="text-right">
				                	<button class="btn btn-primary">
				                		Continue
				                		<i class="fa fa-chevron-right"></i>
				                	</button>
				                </p>

						    </div>
						</a>

				    </div>
				</div>
			</section>
		</div>

    </main>



@endsection
