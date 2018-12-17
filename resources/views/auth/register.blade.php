@extends('layouts.oncattu')

@section('content')
<br>
<div class="jumbotron page-jumbo bg-primary">
        	<h2>Oncatu > Sign up</h2>
		</div>
	<br>
	<h2 class="text-center"><b>Create Your Student Account</b></h2>

    <br>
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger">
                    <strong>Error</strong>
                    Your form contains the following errors

                    <ul>
                        @if($errors->has('name'))
                        <li> {{ $errors->first('name') }} </li>
                        @endif

                        @if($errors->has('tel1'))
                        <li> {{ $errors->first('tel1') }} </li>
                        @endif

                        @if($errors->has('email'))
                        <li> {{ $errors->first('email') }} </li>
                        @endif

                        @if($errors->has('password'))
                        <li> {{ $errors->first('password') }} </li>
                        @endif

                        @if($errors->has('password_confirmation'))
                        <li> {{ $errors->first('password_confirmation') }} </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(session('success'))
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

<div class="container container-page margin20">
    <form class="form-horizontal text-center" action="{{ route('myregister') }}"
    enctype="multipart/form-data" method="post">

    @csrf

    <div class="row">

        <div class="col-md-4">
        	<div class="form-group">
        		<div class="col-sm-12">
        		<input type="text" class="form-control" name="name" placeholder="Enter Names *"
<<<<<<< HEAD
                    required>
=======
                    required value="{{ old('name') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
        	<div class="form-inline">
        		<div class="radio">
        			<label>
                        <input type="radio" name="gender" value="M" checked>
                        Male
                    </label>
        		</div>
        		<div class="radio">
        			<label><input type="radio" name="gender" value="F">Female</label>
        		</div>
          </div>
          <div class="form-group">
        		<div class="col-sm-12">
<<<<<<< HEAD
        		<input type="text" class="form-control"  name="location" placeholder="Location">
=======
        		<input type="text" class="form-control"  name="location"
                placeholder="Location" value="{{ old('location') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
          <div class="form-group">
        		<div class="col-sm-12">
        		<input type="text" class="form-control"  name="tel1" placeholder="1st contact *"
<<<<<<< HEAD
                    required>
=======
                    required value="{{ old('tel1') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
          <div class="form-group">
        		<div class="col-sm-12">
<<<<<<< HEAD
        		<input type="text" class="form-control" name="tel2" placeholder="2nd contact">
=======
        		<input type="text" class="form-control" name="tel2"
                placeholder="2nd contact" value="{{ old('tel2') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
          <div class="form-group">
        		<div class="col-sm-12">
        		<input type="email" class="form-control" name="email" placeholder="E-mail *"
<<<<<<< HEAD
                required>
=======
                    required value="{{ old('email') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
        </div>

        <div class="col-md-4">

        	<div class="form-group">
        		<div class="col-sm-12">
        			<input type="text" class="form-control" id="username" name="username"
<<<<<<< HEAD
                    placeholder="User Name" required>
=======
                    placeholder="User Name" required value="{{ old('username') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-12">
        			<input type="password" class="form-control" id="pwd" name="password"
<<<<<<< HEAD
                    placeholder="Password" required>
=======
                    placeholder="Password" required value="{{ old('password') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-12">
        			<input type="password" class="form-control" id="rpwd"
<<<<<<< HEAD
                    name="password_confirmation" placeholder="Re-enter Password" required>
=======
                    name="password_confirmation" placeholder="Re-enter Password"
                    required value="{{ old('password_confirmation') }}">
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
        		</div>
        	</div>
        </div>

        <div class="col-md-3">
        	<input type="file" name="photo" onchange="previewFile()">
        	<img class="img-circle img-responsive"  id="profile_picture"
            src="/uploads/users/avatars/user.png" alt="image preview...">

        </div>
    </div>
<button name="submit" type="submit" class="btn btn-primary btn-lg">Create Account</button>
</form>
</div>

@endsection

@section('scripts')
<script>
	function previewFile(){
		var preview = document.getElementById('profile_picture');
		console.log(preview.src)
		var file = document.querySelector('input[type=file]').files[0];
			var reader= new FileReader();

			reader.onloadend= function(){

				preview.src = reader.result;
			}
			if(file){
				reader.readAsDataURL(file);
			}
			else{
				preview.src="";
			}
	}
</script>

@endsection
