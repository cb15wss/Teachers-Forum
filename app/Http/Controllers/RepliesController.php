<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Subject;
use App\Video;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    /**
     * Persist a new reply.
     *
     * @return \Illuminate\Database\Eloquent\Model
     * Function stores the replies to the database and redirect user back to the video post
     */
    public function store(Request $request)
    {
        request()->validate([
            'body' => 'required'
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Reply::create($input);

        return back();
    }

    /**
     * Function Update an existing reply.
     *
     * @param Reply $reply
     */
    public function update(Reply $reply)
    {
        $this->authorize('update', $reply);

        $reply->update(request()->validate(['body' => 'required']));
    }

    /**
     * Function Deletes the given reply.
     *
     * @param  Reply $reply
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Reply $reply)
    {
        $this->authorize('update', $reply);
        $reply->delete();
        if (request()->expectsJson()) {
            return response(['status' => 'Reply deleted']);
        }
        return back();
    }
}
