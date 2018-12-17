@extends('layouts.oncattu')

@section('styles')
<link rel="stylesheet" href="/css/AdminLTE.css">
@endsection

@section('content')
<div class="jumbotron page-jumbo bg-primary">
	<h2>Oncatu > Tutor > Upload Book </h2>
</div>

@if(session('success'))
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-success">
            <strong>Success</strong>
            Your account has been created
            <a href="{{ route('login') }}">Click here</a> to login
        </div>
    </div>
</div>
@endif

<br>
<form class="form-horizontal" action="{{ route('book.store') }}"
    method="post" enctype="multipart/form-data">

    @csrf

    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Enter Book Details</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="" class="control-label col-md-4">
                    Book Title:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="text" name="title" class="form-control"
                        placeholder="Enter Book Title" required>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-md-4">
                    Author:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="text" name="author" class="form-control"
                        placeholder="Author" required>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-md-4">
                    Edition:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="text" name="edition" class="form-control"
                        placeholder="E,g. 3rd" required>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-md-4">
                    Description
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <textarea name="description" rows="8" class="form-control"
                        placeholder="Enter the Book description"
                        ></textarea>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
