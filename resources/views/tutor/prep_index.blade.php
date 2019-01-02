@extends('layouts.tutor')

@section('title')
    {{ __('Prep DashBoard') }}
@endsection

@section('content')

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="page-header">My Preps</h3>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('tutor.prep.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Create Prep
                        </a>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tr class="text-dark">
                                    <th>No</th>
                                    <th>Tutorial Name</th>
                                    <th>Fascilitator</th>
                                    <th>Tutorial Area</th>
                                    <th>Subscribers</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>

                                @if($preps == null || count($preps) == 0)
                                <tr>
                                    <th colspan="10" class="text-center">
                                        <strong class="text-primary"> You have no Preps yet </strong>
                                    </th>
                                </tr>
                                @else
                                    <?php $count = 1 ?>
                                    @foreach($preps as $prep)
                                        <tr style="color: #333">
                                            <td> {{ $count++ }} </td>
                                            <td> {{ $prep->name }} </td>
                                            <td> {{ $prep->fascilitator }} </td>
                                            <td> {{ $prep->area }} </td>
                                            <td> {{ 21 }} </td>
                                            <td> {{ $prep->price }} </td>
                                            <td>
                                                <a href="{{ route('tutor.prep.detail', ['code' => $prep->code]) }}"
                                                class="btn btn-info"
                                                    title="See Prep Details">
                                                    More
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h3>Statistics</h3>

                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
