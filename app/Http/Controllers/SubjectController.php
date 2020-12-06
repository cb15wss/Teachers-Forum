<?php
// Controller responsible for passing video subjects to the view
namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *Function return the view with the subjects
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('videos.index', compact('subjects'));
    }
}
