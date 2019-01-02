@extends('layouts.oncattu')

@section('styles')
    <link rel="stylesheet" href="/plugins/videojs/video-js.min.css">
    <link rel="stylesheet" href="/plugins/videojs/theme.css">
@endsection

@section('content')
<div class="container container-page">
        <ul class="secondary-navbar pull-right">
            <li><a href="/oncatu/oncatu-tuts">Find Tutorial</a></li>
            <li><a href="/oncatu/oncatu-tuts/dashboard">My Courses</a></li>
            <li><a href="/oncatu/tutor">Instructor</a></li>
            <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
        </ul>
    </div>
    <div class="jumbotron page-jumbo bg-primary">
            <h2>Oncatu > Tutorial board</h2>
    </div>
    <!--- display board --->
    <div class="container container-page">
        <div class="row">
            <div class="col-sm-3">

                <h4 class="text-center">Tutorial Content</h3>
                <ul class="list-group " id="course-list">
                    <button type="button" class="list-group-item"
                        onclick="playVideo('../videos/video.mp4')">
                        Chapter 1
                        <span class="pull-right"> <i class="fa fa-check text-success"></i> </span>
                    </button>

                    <button type="button" class="list-group-item active"
                        onclick="playVideo('../videos/survivors.mp4')">Chapter 2</button>

                    <button type="button" class="list-group-item"
                        onclick="playVideo('../videos/vid.mp4')">Chapter 3</button>

                    <button type="button" class="list-group-item"
                        onclick="playVideo('../videos/vide')">Chapter 4</button>
                </ul>

                <ul class="list-group">
                    <a href="#" class="list-group-item">Question/Answer</a>
                    <a href="#" class="list-group-item" >Student Chatroom</a>
                </ul>

                <h4 class="text-center">The Campus</h3>
                <ul class="list-group" id="campus-info">
                    <a href="#" class="list-group-item" id="campus-name">Campus Name</a>
                    <a href="#" class="list-group-item" id="campus-location">Locatioin</a>
                    <a href="#" class="list-group-item" id="campus-contact">Contact</a>
                    <a href="#" class="list-group-item" id="campus-tutorials">Other tutorials from campus</a>
                </ul>
            </div>
            <div class="col-sm-6">
                <h4 id="course-title" class=" text-center">UB, Accounting Level 200 Tutorial</h3>
                <div class="board thumbnail">
                    <!-- <video oncontextmenu="return false;" class="video-js" width="100%" controls>
                        <source src="/uploads/tuts/videos/video.mp4">

                    </video> -->
                    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="540" height="264" poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
                      <source src="/uploads/tuts/videos/video.mp4" type="video/mp4">
                      <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                    </video>
                    <div class="resources">
                        <a href="#" class="pull-left">Answer to exercises</a>
                        <div class="pull-right">
                            <a href="#">PowerPoint </a>|
                            <a href="#">PDF </a>|
                            <a href="#">Video</a>
                        </div>
                    </div>
                    <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                        aria-valuenow="0" aria-valuemin="1" aria-valuemax="100" style="width:10%">
                            1% Complete
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <h4 class=" text-center">About the Tutor</h3>
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
                    <a href="#" class="list-group-item">About Tutorial</a>
                    <a href="#" class="list-group-item" >Semester</a>
                    <a href="#" class="list-group-item" >Number of student</a>
                </ul>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/plugins/videojs/video.min.js"></script>
@endsection
