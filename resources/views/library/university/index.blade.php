@extends('layouts.oncattu')

@section('content')
<div class="container container-page">
        <ul class="secondary-navbar pull-right">
            <li><a class="active" href="{{ route('university.library') }}">Find Books</a></li>
            <li><a href="{{ route('library.mybooks') }}">My Books</a></li>
            <li><a href="/oncatu/tutor">Instructor</a></li>
            <a href="#profile"><img src="../images/profile_image.jpg" class="img-circle" height="50" alt="My profile"></a>
        </ul>
    </div>

<div class="jumbotron page-jumbo bg-primary">
        <h2>Universtiy Library > Subscription</h2>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <!-- <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Program major">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Program minor">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Degree program level">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Program level">
                    </div>
                </div>
            </div> -->
            <!-- SEARCH SECTION -->
            <div id="seach-section">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="#" autocomplete="off" class="form-horizontal" method="post" accept-charset="utf-8">

                            <label for="searchtext">Search for Book: </label>
                            <div class="input-group">
                                <input name="searchtext" value="" class="form-control" placeholder="Search..." type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" id="addressSearch">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" checked>By Book Name
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">By Course
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" checked>By Program
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">By Author
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tutorials sections -->
                <div class="row text-center">
                    @foreach($books as $book)
                        <div class="col-sm-4">
                            <a href="{{ route('university.library.book', ['slug' => $book->slug]) }}">
                                <div class="thumbnail">
                                    <img src="/{{ $book->thumbnail }}" alt="{{ $book->title }} - Image"
                                        width="100%" height="150">
                                    <a href="{{ route('university.library.book', ['slug' => $book->slug]) }}">
                                        {{ $book->title }}
                                    </a>
                                    <br>
                                    <a href="{{ route('university.library.book', ['slug' => $book->slug]) }}">
                                        By {{ $book->author }}
                                    </a>
                                    <br>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

        </div>

        <div class="col-sm-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Program</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Edition</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Accounting</td>
                    <td>Principles of accounting</td>
                    <td>Ambe Moses</td>
                    <td>3rd Edition</td>
                </tr>
                </tbody>
            </table>
            <div class="subfee">
                <h2>Subscription Fee</h2>
                <span>499FCFA</span>
            </div>
            <div class="paymentoption">
                <h3>Select Payment option</h3>
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="optradio" checked>MTN MoMo
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Orange Money
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" checked>Africpay
                    </label>
                </div>
                <button class="btn btn-primary btn-lg">PAY</button>
            </div>
        </div>
    </div>
</div>
@endsection
