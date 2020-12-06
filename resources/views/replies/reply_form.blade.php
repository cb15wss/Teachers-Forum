
@foreach($replies as $reply)
    <div class="display-comment" @if($reply->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $reply->user->name }}</strong>
        <p>{{ $reply->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('replies.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="video_id" value="{{ $video_id }}" />
                <input type="hidden" name="parent_id" value="{{ $reply->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('videos.repliesDisplay', ['replies' => $reply->replies])
    </div>
@endforeach
