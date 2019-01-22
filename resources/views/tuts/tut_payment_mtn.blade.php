@extends('layouts.site')

@section('title')

	 - Tutorial Payment (MoMo)
@endsection

@section('content')
	<main class="main">

        <div class="preloader themed-background ">
            <div class="inner">
                <h3 class="text-light visible-lt-ie10">
                    <strong class="loader-message">
                        Loading..
                    </strong>
                </h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title text-center">
            <h2 class="title"> {{ $tutorial->name }} <br> - Subscription </h2>
            
        </div>
        <!-- Page Title -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>

                <i class="fa fa-chevron-right"></i>

                <span class="parent"> <a href="{{ route('tuts.index') }}"> Tutorials </a> </span>

                <i class="fa fa-chevron-right"></i>

                <span class="child"> <a href="{{ route('tut.details', ['slug' => $tutorial->slug]) }}"> {{ $tutorial->name }} </a> </span>

                <i class="fa fa-chevron-right"></i>

                <span class="child"> {{ __("Subscription") }} </span>
            </div>
        </div>

        <section class="services-hood">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header text-color-primary">
                            Tutorial Subscription (MoMo)
                        </h2>
                    </div>
                </div>

                <div class="row">
                <div class="text-center">
                    <img src="/site/img/momo_image.jpeg" alt="Momo Picture">
                </div>
            </div>

            <br>
            <div class="row">


                <p class="text-center f-20 text-dark">  Amount :
                   <strong>{{ number_format($tutorial->price) }} FCFA</strong>
                </p>

                <p class="text-center text-dark">Enter Phone Number</p>

                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <input type="text" name="momo" value="{{ $user->tel1 }}"
                        id="number" class="form-control momo-input"
                         placeholder="Enter Phone Number">

                    <input type="hidden" name="code" id="code" value="{{ $tutorial->code }}">
                    <input type="hidden" name="user" id="user" value="{{ $user->user_id }}">
                    <input type="hidden" name="__token" id="token" value="{{ csrf_token() }}">
                    
                    <input type="hidden" name="type" value="tut" id="type">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <button type="button" name="button" id="pay"
                    class="btn btn-block btn-flat btn-mtn f-16">
                        Pay Now
                    </button>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script type="text/javascript">

    function next()
    {
        window.location.href = "/tuts/mytutorials";
    }

    $(document).ready(function(){


        $pay = $("#pay");
        var code = $("#code").val();
        var user = $("#user").val();
        var token = $("#token").val();
        var type = $("#type").val();
        var number = '';



        $pay.click(function(){
            //get the number
            number = $("#number").val();

            startLoading();

            //validate the phone number
            if(isValidNumber(number))
            {
                //perform post request to pay
                $.ajax({
                    url : '/api/subscribe/tutorial',
                    method : 'post',
                    data : { _token:token, code:code, user:user, number:number, type:type },
                    error : function(e)
                    {
                        console.log(e);
                        stopLoading();
                        showNotification("danger", "Cannot make Payment <br> Please check internet connection");
                    },
                    success : function(data)
                    {
                        console.log(data);
                        stopLoading();

                        //parse the results
                        var result = $.parseJSON(data);

                        var status = result.status;
                        var message = result.message;

                        if(status == "true")
                        {
                            showNotification('success', message);

                            //redirect after 3 seconds
                            var t = 3000;
                            

                            setTimeout("next()",t);


                        }
                        else
                        {
                            showNotification('danger', message);
                        }
                    }
                })
            }
            else
            {
                stopLoading();
            }
        });


        function isValidNumber(number)
        {
            //remove all spaces and others then count the leng
            var formatted = formatNumber(number);
            var length = formatted.length;

            if(length < 9)
            {
                showNotification('danger', 'Number cannot be less than 9 digits');
                return false;
            }
            else if(length > 9)
            {
                showNotification('danger', 'Number cannot be greater than 9 digits');
                return false;
            }

            if(isNaN(number))
            {
                showNotification('danger', "Number should contain only numbers");
                return false;
            }

            return true;
        }

        function formatNumber(number)
        {
            var num = number.replace(/\s/g, '');
                num = num.replace(/\,/g, '');
                num = num.replace(/\./g, '');
                num = num.replace(/\-/g, '');

            return num;
        }

        function startLoading()
        {
            $(".preloader").addClass('active');
        }

        function stopLoading()
        {
            if($(".preloader").hasClass('active'))
            {
                $(".preloader").removeClass('active')
            }
        }

        function refresh()
        {
            window.reload;
        }

        function next()
        {
            window.location.href = "/booking/" + code + "/receipt";
        }
    })
</script>
@endsection