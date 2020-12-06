<?php
/**
 * This controller is responsible for passing user information and videos to the user home profile page
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * This is to make sure that the user is signed in to access the home page
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * This function loads up the home page view with user id and videos
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        //check for correct user

        if(auth()->user()->id !==$user_id){
            return redirect('videos')->with('error','Unauthorised Access');
        }
        return view('home')->with('videos', $user->videos);
    }
}
