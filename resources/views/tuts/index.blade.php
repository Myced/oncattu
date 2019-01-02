@extends('layouts.tuts')

@section('content')

    <div class="jumbotron page-jumbo bg-primary">
            <h2>Oncatu > Tutorials</h2>
    </div>

    <!-- SEARCH SECTION -->
    <div id="seach-section" class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('tuts.search') }}" autocomplete="off" class="form-horizontal"
                    method="get" accept-charset="utf-8">

                    <label for="searchtext">Search for tutorials: </label>
                    <div class="input-group">
                        <input name="keyword" value="" class="form-control" placeholder="Search..." type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" id="addressSearch">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                    </div>
                    <div class="input-group">
                        <label class="radio-inline">
                            <input type="radio" name="option" checked value="campus">By Campus
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option" value="program">By Program
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option" value="level">By Level
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option" value="tutor">By Tutor
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tutorials sections -->
    <br>
    <div class="container text-center">
        @if(count($tuts) == 0)
        <div class="row text-center">
            <div class="col-sm-12">
                <br>
                <h2 class="textColorPrimary">No Tutorials at this time</h2>
                <br><br>
            </div>

        </div>
        @else
        <div class="row text-center" style="background: #efefef">

            @foreach($tuts as $tut)
                <div class="col-sm-4">
                    <a href="#" class="book-link">
                        <div class="thumbnail">
                            <img src="/{{ $tut->thumbnail }}" alt="Paris" width="400" height="300">
                            <strong class="prep-title textColorPrimary">
                                {{ $tut->campus }},
                                Level {{ $tut->level }}
                            </strong>
                            <br>
                             <span class="prep-name textColorPrimary">
                                 {{ $tut->name }}
                             </span>
                            <br>
                            By {{ $tut->teacher->name }}
                            <br>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        @endif
    </div>
@endsection
