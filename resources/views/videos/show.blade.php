<!--Page that displays details of a single video post -->
@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <br/>
                        <h2>{{ $video->title }}</h2>
                        <p>
                        </p>
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-body">
                                    <iframe width="800" height="400" src={{ $video->video_path}} frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="panel-heading"><h2>Comments</h2></div>
                        @include('videos.repliesDisplay', ['replies' => $video->replies, 'video_id' => $video->id])
                        <hr />
                        <h4>Add comment</h4>
                        {!! Form::open(['action' => 'RepliesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="video_id" value="{{ $video->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add Comment" />
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
