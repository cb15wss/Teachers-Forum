<!--Forum page view-->
@extends('layouts.master')
@section('title','Forum Page')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Create a New Video Post</div> <!--Button Link to the video creating form-->
                        <div class="panel-body">
                            <form method="post" action="/videos"> <!--The controller function which handles the form request-->
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="subject_id">Choose a Subject</label>
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
                                    <label for="title">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           value="{{ old('title') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="body">Body:</label>
                                    <wysiwyg name="body"></wysiwyg>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                </div>
                                @if (count($errors))
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
