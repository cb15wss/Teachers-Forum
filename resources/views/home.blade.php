<!--Home Page that displays user profile and their video posts -->
@extends('layouts.master_profile')
@section('content')
    <div class="container">
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>My Profile</h3></div>
                </div>
                    <div class="panel-body" align="right">
                        <a href="/videos/create" class="btn btn-primary">Upload New Video</a> <!--video upload form link-->
                    </div>
                        <div class="panel-heading">
                            <h3>My Videos</h3>
                        </div>

            <div class="panel panel-default"> <!--Table to display user video posts -->
                        @if(count($videos) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($videos as $video)
                                    <tr>
                                        <td><a href="/videos/{{$video->id}}" class="btn btn-default">{{$video->title}}</a></td>
                                        <td><a href="/videos/{{$video->id}}/edit" class="btn btn-default">Edit</a></td> <!--Link button to video editing form-->
                                        <td>
                                            {!!Form::open(['action' => ['VideosController@destroy', $video->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no videos</p> <!--Shows if user do not have any posts-->
                        @endif
                    </div>
                </div>
                </div>
@endsection
