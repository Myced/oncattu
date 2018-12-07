@extends('layouts.oncattu')

@section('content')
<div class="container container-page">
        <ul class="secondary-navbar pull-right">
            <li><a href="/oncatu/oncatu-lib/">Find Book</a></li>
            <li><a href="/oncatu/oncatu-lib/dashboard">My Books</a></li>
            <li><a href="/oncatu/tutor">Instructor</a></li>
            <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
        </ul>
    </div>
    <div class="jumbotron page-jumbo bg-primary">
            <h2>Oncatu DTBL> Read book</h2>
    </div>
    <!--- display board --->
    <div class="container container-page">
        <div class="row">
            <div class="col-sm-3">

                <h4 class="text-center">Chapter outline</h3>
                <ul class="list-group " id="course-list">
                    <button type="button" class="list-group-item" onclick="playVideo('../videos/video.mp4')">Consiel Constitutionel</button>
                    <button type="button" class="list-group-item" onclick="playVideo('../videos/survivors.mp4')">Survivor</button>
                    <button type="button" class="list-group-item" onclick="playVideo('../videos/vid.mp4')">Mass Burial</button>
                    <button type="button" class="list-group-item" onclick="playVideo('../videos/vide')">Say you won't let go</button>
                </ul>

                <ul class="list-group">
                    <a href="#" class="list-group-item">Chatroom</a>
                    <a href="#" class="list-group-item" >Textbook feedback</a>
                </ul>

            </div>
            <div class="col-sm-6">
                <h4 id="prep-title" class=" text-center">Name of book   </h3>
                <div class="board thumbnail">
                    <video oncontextmenu="return false;" class="img-responsive" width="100%" controls>
                        <source src="../videos/vide">

                    </video>

                </div>
            </div>
            <div class="col-sm-3">
                <h4 class=" text-center">Book Detail</h3>
                <ul class="list-group">
                    <a href="#" class="list-group-item" id="tutor-name">Name of author</a>
                    <a href="#" class="list-group-item" id="tutor-name">Date published</a>
                    <a href="#" class="list-group-item" id="tutor-name">Other editions</a>
                    <a href="#" class="list-group-item" id="tutor-name">Course tailored to</a>
                </ul>
                <ul class="list-group">
                    <a href="#" class="list-group-item">My profile</a>
                    <a href="/oncatu/oncatu-lib/dashboard" class="list-group-item" >My books</a>
                </ul>


            </div>
        </div>
    </div>
@endsection
