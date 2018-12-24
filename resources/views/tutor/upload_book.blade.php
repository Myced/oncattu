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
            <strong>
				<i class="fa fa-check"></i>
				Success
			</strong>
            {{ session('success') }}
        </div>
    </div>
</div>
@endif

@if(session('error'))
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-danger">
            <strong>
				<i class="fa fa-times"></i>
				Error
			</strong>
            {{ session('error') }}
        </div>
    </div>
</div>
@endif

@if(count($errors) > 0)
<br>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-danger">
				<strong>Error</strong>
				Your form contains the following errors

				<ul>
					@if($errors->has('title'))
					<li> {{ $errors->first('title') }} </li>
					@endif

					@if($errors->has('author'))
					<li> {{ $errors->first('author') }} </li>
					@endif

					@if($errors->has('edition'))
					<li> {{ $errors->first('edition') }} </li>
					@endif

					@if($errors->has('description'))
					<li> {{ $errors->first('description') }} </li>
					@endif

					@if($errors->has('price'))
					<li> {{ $errors->first('price') }} </li>
					@endif

				</ul>
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
		<div class="col-md-1">

		</div>
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

		<div class="col-md-4">

			<div class="form-group">
                <label for="" class="control-label col-md-4">
                    Price:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="text" name="price" class="form-control"
                        placeholder="E,g. 1500" required>
                </div>
            </div>

			<div class="form-group">
                <label for="" class="control-label col-md-4">
                    Book Type:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <select class="form-control" name="type">
                    	<option value="college">College</option>
						<option value="university">University</option>
                    </select>
                </div>
            </div>

			<div class="form-group">
                <label for="" class="control-label col-md-4">
                    Upload PDF:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="file" name="pdf" class="form-control"
                         required>
                </div>
            </div>

			<div class="form-group">
                <label for="" class="control-label col-md-4">
                    Book Image:
                    <span class="required">*</span>
                </label>

                <div class="col-md-8">
                    <input type="file" name="image" class="form-control"
                         required id="image">

						 <br>
					<div class="photo">
						<img src="" alt="" id="img" width="150px" height="150px">
					</div>
                </div>
            </div>
		</div>


    </div>

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<button type="submit" name="save" class="btn btn-primary">
					<i class="fa fa-upload"></i>
					Upload Book
				</button>
			</div>
		</div>
	</div>
	<br><br>
</form>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		 function readURL(input) {

		  if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
			  $('#img').attr('src', e.target.result);

			  $('#img').hide();
			  $('#img').fadeIn(650);

			}

			reader.readAsDataURL(input.files[0]);
		  }
		}

		$("#image").change(function() {
		  readURL(this);
		});
	 });
</script>
@endsection
