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
                                <tr class="text-dark">
                                    <th>No</th>
                                    <th>Tutorial Name</th>
                                    <th>Program</th>
                                    <th>Tutorial Area</th>
                                    <th>Semester</th>
                                    <th>Level</th>
                                    <th>Subscribers</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                @if(count($tuts) == 0)
                                <tr>
                                    <td class="text-center" colspan="10">
                                        <strong class="textColorPrimary">You have No Tutorials</strong>
                                    </td>
                                </tr>
                                @else

                                    <?php $count = 1; ?>
                                    @foreach($tuts as $tut)
                                        <tr>
                                            <td> {{ $count++ }} </td>
                                            <td> {{ $tut->name }} </td>
                                            <td> {{ $tut->program }} </td>
                                            <td> {{ $tut->area }} </td>
                                            <td> {{ $tut->semester }} </td>
                                            <td> {{ $tut->level }} </td>
                                            <td> {{ __('07') }} </td>
                                            <td> {{ number_format($tut->price) }}  FCFA</td>
                                            <td>
                                                <a href="{{ route('tutor.tut.detail', ['code' => $tut->code]) }}"
                                                class="btn btn-info">
                                                    Details
                                                </a>
                                                <a href="#"
                                                    class="btn btn-delete delete">
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
                        hdfhdhfdhf
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
