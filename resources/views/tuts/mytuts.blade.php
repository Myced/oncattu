@extends('layouts.oncattu')

@section('content')
    <div class="container container-page">
        <ul class="secondary-navbar pull-right">
            <li><a href="/oncatu/oncatu-tuts">Find Tutorial</a></li>
            <li><a class="active" href="/oncatu/oncatu-tuts/dashboard">My Courses</a></li>
            <li><a href="/oncatu/tutor">Instructor</a></li>
            <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
        </ul>
    </div>
    <div class="jumbotron page-jumbo bg-primary">
        <h2>Tutorials > My tutorials</h2>
    </div>

    <div class="container container-padding bg-grey">
    <div class="row">
        <div class="col-sm-4 user-info">
            <p>Name: <span class="user-value"><u> {{ auth()->user()->name }} </u></span></p>
            <p>Gender: <span class="user-value"><u>
                @if(auth()->user()->sex == 'M')
                    {{ __('Male') }}
                @else
                    {{ __('Female') }}
                @endif
            </span></u></p>
            <p>Location: <span class="user-value"><u>
                {{ auth()->user()->location }}
            </u></span></p>
        </div>

        <div class="col-sm-4 user-info">
            <p>Contact:
                <span class="user-value">
                    <u>
                        {{ auth()->user()->tel1 }}

                        @if(auth()->user()->tel2 != '')
                            {{ __(' / ') }}
                            {{ auth()->user()->tel2 }}
                        @endif
                    </u>
                </span>
            </p>
            <p>Email:
                <span class="user-value">
                    <u> {{ auth()->user()->email }} </u>
                </span>
            </p>


            <!--<p>Location: <span class="user-v</span>alue"><u>Dirty South Buea</u></span></p>-->
        </div>

        <div class="col-sm-4">
            <img src="/{{ auth()->user()->avatar }}" alt="profile image" height="240" class="img-circle">
        </div>
    </div>
    </div>

    <div class="container">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Tutorial Name</th>
        <th>Tutor</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td><a href="{{ route('class') }}" class="btn btn-primary">Go to class</a></td>
      </tr>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td><a href=" {{ route('class') }}" class="btn btn-primary">Go to class</a></td>
      </tr>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td><a href="/oncatu/oncatu-tuts/board" class="btn btn-primary">Go to class</a></td>
      </tr>
    </tbody>
    </table>
    </div>
@endsection
