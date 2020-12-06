<?php
//This controller passes videos from the database to views
namespace App\Http\Controllers;

use App\Reply;
use App\Subject;
use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() //only logged in users can view the videos
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $replies = Reply::all();

        $videos = Video::orderBy('created_at','desc')->paginate(10);

       return view('videos.index')
           ->with(['videos'=>$videos,
           'replies'=> $replies,
           ]);
    }

    /**
     * Show the video form for creating a new video.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('videos.create')->with([
        'subjects'=>$subjects,
    ]);
    }

    /**
     * Store a newly created video post  in video database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([ // Video form fields data validation rules
            'title' => 'required',
            'body' => 'required',
            'subject_id' => 'required|exists:subjects,id',
            'video_path' => 'required'
        ]);

        $video = Video::create([
            'user_id' => auth()->id(),
            'subject_id' => request('subject_id'),
            'title' => request('title'),
            'body' => request('body'),
            'slug' => request('body'),
            'video_path' => request('video_path')
        ]);

        if (request()->wantsJson()) {
            return response($video, 201);
        }

        return redirect('/videos')
            ->with('flash', 'Your Video thread has been published!');
    }

    /**
     * Display details of a specified video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show')->with('video', $video);
    }

    /**
     * Show the video form for video editing .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);

        // Check for correct user
        if(auth()->user()->id !==$video->user_id){
            return redirect('/videos')->with('error', 'Unauthorized Page');
        }

        return view('videos.edit')->with('video', $video);
    }

    /**
     * Update the specified video in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('video_path')){
            // Get filename with the extension
            $filenameWithExt = $request->file('video_path')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('video_path')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('video_path')->storeAs('public/videos', $fileNameToStore);
        }

        // Create Post
        $video = Video::find($id);
        $video->title = $request->input('title');
        $video->body = $request->input('body');
        if($request->hasFile('video_path')){
            $video->cover_image = $fileNameToStore;
        }
        $video->save();

        return redirect('/videos')->with('success', 'Video Uploaded');
    }

    /**
     * Deletes the video from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        // Check for correct user
        if(auth()->user()->id !==$video->user_id){
            return redirect('/videos')->with('error', 'Unauthorized Page');
        }

        $video->delete();
        return redirect('/videos')->with('success', 'Video Removed');
    }
}

