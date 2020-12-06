<!--Page that shows all created video posts-->
@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading">
                 <h2>All Video Posts</h2>
                </div>
                <div class="panel-body" align="right">
                    <a href="/videos/create" class="btn btn-primary">Upload New Video</a>
                </div>
               @foreach($videos as $video)
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3><a href="/videos/{{$video->id}}">{{$video->title}}</a></h3>
                                <h5>
                                    Posted By: <a href="#">{{ $video->creator->name }}</a> at
                                    {{ $video->created_at}}
                                </h5>
                            </div>

                                <div class="panel-body"><h3>Video Summary</h3> {!! $video->body !!}</div>

                                <div class="panel-footer">
                                    <a href="{{ route('videos.show', $video->id) }}" class="btn btn-primary">Watch Video</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        </div>
        </div>
@endsection
