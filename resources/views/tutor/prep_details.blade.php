@extends('layouts.tutor')

@section('title')
    Prep - {{ $prep->name }}
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/dropzone/dropzone.min.css">
@endsection

@section('content')
<div class="container-fluid">

    @if(session('success'))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-success">
                <strong>Success</strong>
                {{ session('success') }}
            </div>
        </div>
    </div>
    @endif

    @if(session('error'))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-danger">
                <strong>Error</strong>
                {{ session('error') }}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong class="text-white"> Action </strong>
                </div>

                <div class="panel-body text-center">

                    @if($prep->status == "PENDING")
                    <p class="text-center">
                        <strong class="text-dark">
                            This Prep is awaiting Publishing
                        </strong>
                    </p>

                    @else
                    <p class="tent-center">
                        <strong class="text-dark">
                            This Prep is Alive <i class="fa fa-check text-success"></i>
                        </strong>
                    </p>
                    @endif

                    <div class="row text-center">
                        @if($prep->status == "PENDING")
                        <a href="{{ route('tutor.prep.publish', ['code' => $prep->code]) }}"
                            class="btn btn-info btn-lg btn-flat">

                            <i class="fa fa-paper-plane"></i>
                            Publish Prep
                        </a>
                        @else

                        <a href="{{ route('tutor.prep.down', ['code' => $prep->code]) }}"
                            class="btn btn-primary btn-lg btn-flat">
                            <i class="fa fa-times"></i>
                            Take Down Prep
                        </a>

                        @endif

                        <br>
                        <br>
                        <a href="#" class="btn btn-danger btn-lg btn-flat">
                            <i class="fa fa-trash"></i>
                            Delete Prep
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-9">
            <h2 class="page-header">Tutorial Content</h2>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <a href="#content" data-toggle="modal" role="modal"
                        class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Add New Content
                    </a>

                    <a href="{{ route('tutor.prep.index') }}"
                        class="btn btn-primary" title="Go back to preps">
                        <i class="fa fa-chevron-left"></i>
                        Go Back
                    </a>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr class="text-dark">
                                <th>S/N</th>
                                <th>Chapter</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Video</th>
                                <th>PowerPoint</th>
                                <th>Pdf</th>
                                <th>Action</th>
                            </tr>

                            @if(count($prep->content) == 0)
                            <tr>
                                <th class="text-center" colspan="10">
                                    <strong class="text-primary">No Content Uploaded Yet</strong>
                                </th>
                            </tr>
                            @else
                                <?php $count = 1; ?>

                                @foreach($prep->content as $content)
                                    <tr class="text-black">
                                        <td> {{ $count++ }} </td>
                                        <td> {{ $content->name }} </td>
                                        <td> {{ $content->title }} </td>
                                        <td> {{ $content->description }} </td>
                                        <td>
                                            @if($content->video == null)
                                                <i class="fa fa-times text-danger"></i>
                                            @else
                                                <i class="fa fa-check text-success"></i>
                                            @endif
                                        </td>

                                        <td>
                                            @if($content->ppt == null)
                                                <i class="fa fa-times text-danger"></i>
                                            @else
                                                <i class="fa fa-check text-success"></i>
                                            @endif
                                        </td>

                                        <td>
                                            @if($content->pdf == null)
                                                <i class="fa fa-times text-danger"></i>
                                            @else
                                                <i class="fa fa-check text-success"></i>
                                            @endif
                                        </td>


                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="content">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" enctype="multipart/form-data"
                action="{{ route('tutor.prep.content.store', ['code' => $prep->code]) }}"
                method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" role="close" class="close pull-right"
                        data-target="#content" data-toggle="modal"
                        name="button">&times;</button>
                    <h2>Prep Content</h2>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    Chapter name:
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="chapter_name" value=""
                                        class="form-control" placeholder="Eg. Chapter 1 or Content A, etc" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    Chapter Title:
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="chapter_title" value=""
                                        class="form-control" placeholder="Eg. Introductory Accounting" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    Detail Description:
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <textarea name="description" rows="8" required
                                        class="form-control" placeholder="Enter detail chapter description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    PowerPoint file:
                                </label>
                                <div class="col-md-8">
                                    <input type="file" name="ppt" value="" id="ppt" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    PDF File:
                                </label>
                                <div class="col-md-8">
                                    <input type="file" name="pdf" value="" id="pdf"
                                        class="form-control">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">
                                    Chapter Video:
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <div id="video">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    <button type="submit" name="button"
                        class="btn btn-info btn-flat">
                        Save Content
                    </button>
                    <button type="button" name="button"
                        class="btn btn-danger btn-flat"
                        data-toggle="modal" data-target="#content">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript">
        //handle droptzone callback functions here
        $("div#video").dropzone({ url: "/file/post" });
    </script>
@endsection
