@extends('layouts.tutor')

@section('title')
    {{ __('My Books') }}
@endsection

@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">All My Books</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('tutor.book.upload') }}"
                class="btn btn-primary" title="Upload A Book">
                <i class="fa fa-upload"></i>
                Upload Book
            </a>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover  text-black">
                    <tr>
                        <th>S/N</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>

                    <?php $count = 1; ?>
                    @foreach($books as $book)
                        <tr>
                            <td> {{ $count++ }} </td>
                            <td>
                                <img src="/{{ $book->thumbnail }}" alt=""
                                    width="100px" height="120px">
                            </td>
                            <td>
                                <strong> {{ $book->title }} </strong>
                            </td>

                            <td> {{ $book->author }} </td>

                            <td> {{ $book->edition }} Edition </td>
                            <td> {{ $book->type }} </td>
                            <td>
                                <a href="#" class="btn btn-default">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
