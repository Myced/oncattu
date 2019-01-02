@extends('layouts.tutor')

@section('title')
    {{ __('Create Prep') }}
@endsection

@section('content')
    <div class="container">
        <form class="form-horizontal" action="{{ route('tutor.prep.store') }}"
            method="post" enctype="multipart/form-data">
            @csrf

            <br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="page-header">Fill out the Prep Course Information below</h3>
                </div>
            </div>

            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-sm-4">
                            Prep Name:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		<input type="text" class="form-control"  name="name"
                            placeholder="E.g ENAM Preparation" required>
                  		</div>
                  	</div>

                    <div class="form-group">
                        <label for="" class="col-sm-4">
                            Subject Area:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		<input type="text" class="form-control"  name="area"
                            placeholder="Subject Area" required>
                  		</div>
                  	</div>

                    <div class="form-group">
                        <label for="" class="col-sm-4">
                            Fascilitator:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		<input type="text" class="form-control"  name="fascilitator"
                            placeholder="Program" required value="{{ auth()->user()->name }}">
                  		</div>
                  	</div>

                    <div class="form-group">
                        <label for="" class="col-sm-4 ">
                            Prep Image:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		<input type="file" class="form-control" id="image"  name="thumbnail"
                            required>

                        <br>
                        <img src="" id="img" alt="" width="100px" height="100px">
                  		</div>
                  	</div>

                </div>

                <!-- //next column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-sm-4">
                            Price:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		<input type="text" class="form-control"  name="price"
                            placeholder="Eg. 3,000" required>
                  		</div>
                  	</div>

                    <div class="form-group">
                        <label for="" class="col-sm-4">
                            Prep Description:
                            <span class="required">*</span>
                        </label>
                  		<div class="col-sm-8">
                  		    <textarea name="description" rows="8" class="form-control"
                                required></textarea>
                  		</div>
                  	</div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="submit" name=""
                            class="btn btn-primary">
                            <i class="fa fa-send"></i>
                            Save Prep
                        </button>
                    </div>
                </div>
            </div>
            <br>

        </form>
    </div>
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
