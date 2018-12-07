@extends('layouts.oncattu')

@section('content')
<div class="container container-page">
        <ul class="secondary-navbar pull-right">
            <li><a href="/oncatu/oncatu-lib/">Find Books</a></li>
            <li><a class="active" href="/oncatu/oncatu-lib/dashboard">My Books</a></li>
            <li><a href="/oncatu/tutor">Instructor</a></li>
            <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
        </ul>
    </div>
<div class="jumbotron page-jumbo bg-primary">
        <h2>Dashboard > My Books</h2>
</div>

<div class="container container-padding bg-grey">
    <div class="row">
        <div class="col-sm-4 user-info">
            <p>Name: <span class="user-value"><u>Mangi Elijah Nchimehnyi</u></span></p>
            <p>Gender: <span class="user-value"><u>Male</span></u></p>
            <p>Location: <span class="user-value"><u>Dirty South Buea</u></span></p>
        </div>

        <div class="col-sm-4 user-info">
            <p>Contact: <span class="user-value"><u>+237 672 084 140</u></span></p>
            <p>Email: <span class="user-value"><u>mangielijah8@gmail.com</span></u></p>
            <p>Library No: <span class="user-value"><u>22392</u></span></p>-->
        </div>

        <div class="col-sm-4">
            <img src="../images/profile_image.jpg" alt="profile image" height="240" class="img-circle">
        </div>
    </div>
</div>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td>3rd</td>
        <td><a href="{{ route('book.read', ['book' => '2']) }}" class="btn btn-primary">Read</a></td>
      </tr>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td>3rd</td>
        <td><a href="/oncatu/oncatu-lib/board" class="btn btn-primary">Read</a></td>
      </tr>
      <tr>
        <td>Hibmat Level 100 Management</td>
        <td>Mayong Egbe</td>
        <td>3rd</td>
        <td><a href="/oncatu/oncatu-lib/board" class="btn btn-primary">Read</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
