@extends('layouts.oncattu')

@section('content')
<div class="jumbotron page-jumbo bg-primary">
    <h2>Oncatu DTBL > Libraries</h2>
</div>

<div class="container container-page">
	<div class="row">
	    <div class="col-sm-6 ">
	    	<a href="{{ route('college.library') }}" class="img-thumbnail library">
		    <div class="libraryTitle">
	             <h2>College Text Book Library</h2>
		    </div>

		    <div class="desc">
    			<p>Get all the presecribed books for the academic year
                    from form one to uppersixth
                    <br>
                    All subjects from English,
                    French, History, Economics and all other college subjects
                </p>
		    </div>
		</a>
	    </div>
	    <div class="col-sm-6">
	    	<a href="{{ route('university.library') }}" class="img-thumbnail library">
		    <div class="libraryTitle">
	             <h2>University Text Book Library</h2>
		    </div>

		    <div class="desc">
    			<p>Best university text books for all courses from level 1 to
                    final level, Master and PHD
                    <br>
                    All books from authors with
                    latest editions for all university programs ans courses
                </p>
		    </div>
		</a>

	    </div>
	</div>
</div>
@endsection
