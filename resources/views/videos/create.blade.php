<!--Page that contains the video post creating form-->
@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Video Uploading Rules</h1>
                    </div>
                        <div class="panel-body">
                          <h3>Please follow these rules to upload your video.</h3>
                        </div>
                    <div class="panel-body">
                        <ol>
                            <li>First upload your video on <a href="https://www.youtube.com">YOUTUBE</a> a Video
                                can be found <a href="https://www.youtube.com/watch?v=h1lcSVnE4Ok">How to upload Video on you tube link</a>
                                on how to upload a video on you tube.</li>

                            <li>Secondly click on share below the video and press the link Embed at the top like below:   </li>
                                <img src="{{ asset('images/embed1.png')}}" alt="Embed code">


                            <li>Extract and copy only the 'src' without the quotes with the embed code attached as shown
                                below:</li>
                                <img src="{{ asset('images/embed2.png')}}" alt="Embed code">

                            <li>Fill the start new video thread form below with requested details.</li>
                            <li>Add the copied embed link to the 'Video Youtube Embedded link field' on the form and hit upload</li>

                        </ol>
                        <p>If these rules are not followed correctly your video will not be uploaded successfully.</p>
                    </div>
                </div>

        <div class="panel-heading">  <h1>Create Video Post</h1></div>

    {!! Form::open(['action' => 'VideosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        <label for="subject_id">Choose a Subject:</label>
        <select name="subject_id" id="subject_id" class="form-control" required>
            <option value="">Choose One...</option>

            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
            {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>

    <div class="form-group">
        {{Form::label('video_path', 'Video url')}}
        {{Form::text('video_path', '', ['class' => 'form-control', 'placeholder' => 'Video Url'])}}
    </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    </div>
    </div>

@endsection
