<!--Page that displays details of a single video reply -->
@foreach($replies as $reply)
    <div class="display-comment" @if($reply->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $reply->user->name }}</strong>
        <p>{{ $reply->body }}</p>
        <form method="post" action="{{ route('replies.store') }}">
            @csrf
            <div class="form-group">
                <label>
                    <input type="hidden" name="body" class="form-control" />
                </label>
                <input type="hidden" name="post_id" value="{{ $video_id }}" />
                <input type="hidden" name="parent_id" value="{{ $reply->id }}" />
            </div>
        </form>

        @include('videos.repliesDisplay', ['replies' => $reply->replies])
    </div>
@endforeach
