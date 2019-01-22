@extends('layouts.site')

@section('css.plugins')
    <link rel="stylesheet" href="/plugins/videojs/video-js.min.css">
    <link rel="stylesheet" href="/site/css/vjs.css">
@endsection

@section('title')
    - Class - {{ $tutorial->name }}
@endsection

@section('content')

    <main class="main m-b-50">
        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> Tutorial Class </h2>
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
                <span class="child"> <a href="{{ route('mytuts') }}">My Tutorials</a> </span>

                <i class="fa fa-chevron-right"></i>
                <span class="child"> {{ $tutorial->name }} </span>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-color-primary sans-serif bb-primary">
                        Tutorial : <strong>{{ $tutorial->name }}</strong>
                    </h2>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-3">

                    <h4 class="text-center text-bold">Tutorial Content</h3>
                    <ul class="list-group text-black" id="course-list">

                        @foreach($tutorial->content as $tutContent)
                            <a href="{{ route('tut.content', ['code' => $tutorial->code, 'content' => $tutContent->id]) }}"
                                class="list-group-item  {{ $tutContent->id == $content->id ? 'active' : '' }} ">
                                {{ $tutContent->name }}: <strong>{{ $tutContent->title }}</strong>
                                @if($tutContent->isWatched())
                                    <span class="pull-right text-color-primary"> <i class="fa fa-check text-color-primary"></i> </span>
                                @endif
                            </a>
                        @endforeach

                    </ul>

                    <!-- <ul class="list-group">
                        <a href="#" class="list-group-item">Question/Answer</a>
                        <a href="#" class="list-group-item" >Student Chatroom</a>
                    </ul> -->

                    <h4 class="text-center text-bold">The Campus</h3>
                    <ul class="list-group" id="campus-info">
                        <a href="#" class="list-group-item" id="campus-name">Campus Name</a>
                        <a href="#" class="list-group-item" id="campus-location">Locatioin</a>
                        <a href="#" class="list-group-item" id="campus-contact">Contact</a>
                        <a href="#" class="list-group-item" id="campus-tutorials">Other tutorials from campus</a>
                    </ul>
                </div>



                <div class="col-sm-6">

                    <div class="row">
                        <h3 id="course-title" class=" text-center text-bold sans-serif">
                            {{ $content->name }} - {{ $content->title }}
                        </h3>
                        <div class="board thumbnail">

                            <div class="row">
                                <div class="col-md-12 text-center">

                                    <video id="video" class="video-js vjs-default-skin" controls preload="none"  poster="/{{ $tutorial->thumbnail }}" data-setup="{}" >
                                       <source src="/uploads/tuts/videos/video.mp4" type="video/mp4">
                                       <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                    </video>
                                    <div class="resources">
                                        <a href="javascript:void(0)" class="pull-left">Answer to exercises</a>
                                        <div class="pull-right">
                                            <a href="#">PowerPoint </a>|
                                            <a href="#">PDF </a>|
                                            Video
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="{{$progress}}" aria-valuemin="1" aria-valuemax="100" style="width:{{$progress}}%">
                                    {{$progress}}% Complete
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            @if($prev = $content->getPrev())
                                <a href="{{ route('tut.content', ['code' => $tutorial->code, 'content' => $prev->id]) }}"
                                    class="btn btn-info pull-left btn-rounded btn-pd">
                                    <i class="fa fa-chevron-left"></i>
                                    Previous
                                </a>
                            @endif


                            @if($next = $content->getNext())

                                <a href="{{ route('tut.content', ['code' => $tutorial->code, 'content' => $next->id]) }}"
                                    class="btn btn-info pull-right btn-rounded btn-pd">

                                    Next
                                    <i class="fa fa-chevron-right"></i>
                                </a>

                            @endif
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="sans-serif text-color-primary bb-primary">
                                Chatpter Description
                            </h3>
                        </div>

                        <div class="col-md-12">
                            <div class="text-justified text-black serif f-16">
                                <br>
                                <?php echo nl2br($content->description) ?>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-sm-3">
                    <h4 class=" text-center text-bold">About the Tutor</h3>
                    <ul class="list-group">
                        <a href="#" class="list-group-item" id="tutor-name">Tutor name</a>
                        <a href="#" class="list-group-item" id="tutor-campus">Campus</a>
                        <a href="#" class="list-group-item" id="tutor-area">Tutor area</a>
                    </ul>
                    <ul class="list-group">
                        <a href="#" class="list-group-item">Student</a>
                        <a href="#" class="list-group-item">Student profile</a>
                        <a href="#" class="list-group-item" >Student Subscribe</a>
                        <a href="#" class="list-group-item" >Change tutorial course</a>
                    </ul>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong class="text-dark">About Tutorial</strong>
                        </li>
                        <a href="javascript:void(0)" class="list-group-item" >
                            Semester:
                            <strong>{{ $tutorial->semester }}</strong>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" >
                            Number of student:
                            <strong>?</strong>
                        </a>
                    </ul>

                </div>
            </div>
        </div>
    </main>


@endsection

@section('scripts')
    <script type="text/javascript" src="/plugins/videojs/video.min.js"></script>

@endsection
