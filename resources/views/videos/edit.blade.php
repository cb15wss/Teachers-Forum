@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="panel-heading">  <h1>Edit Video Post</h1></div>
    {!! Form::open(['action' => ['VideosController@update', $video->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $video->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $video->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

    <div class="form-group">
        {{Form::label('video_path', 'Video url')}}
        {{Form::text('video_path',$video->video_path, ['class' => 'form-control', 'placeholder' => 'Video Url'])}}
    </div>


        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
