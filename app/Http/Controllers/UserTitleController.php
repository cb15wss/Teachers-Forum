<?php
// This controller passes the user titles from the title database to the view
namespace App\Http\Controllers;

use App\UserTitle;
use Illuminate\Http\Request;

class UserTitleController extends Controller
{
    /**
     * Show all user titles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $titles =UserTitle::all();
        return view('home', compact('titles'));
    }

}
