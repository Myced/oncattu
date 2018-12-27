@extends('layouts.tutor')

@section('title')
    {{ __('Tutorial DashBoard') }}
@endsection

@section('content')

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3>Main Content Here</h3>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('tutor.tuts.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Create Tutorial
                        </a>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Tutorial Name</th>
                                    <th>Program</th>
                                    <th>Tutorial Area</th>
                                    <th>Subscribers</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h3>Statistics</h3>

                <div class="row">
                    <div class="col-md-12">
                        hdfhdhfdhf
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
