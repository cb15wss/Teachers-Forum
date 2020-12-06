<?php
/**
 * This controller is responsible for loading website pages
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() // Loads the landing page
    {
        $title = 'Welcome To Magister!';
        return view('pages.index')->with('title', $title);
    }

    public function contact() //Loads the contact page
    {
        return view('pages.contact');
    }

    public function bibliography() //Loads the bibliography page
    {
        return view('pages.bibliography');
    }

    public function faq() //Loads the faq page
    {
        return view('pages.faq');
    }

    public function privacy() //Loads the privacy page
    {
        return view('pages.terms');
    }

    public function terms() //Loads the terms page
    {
        return view('pages.terms');
    }

    public function about() //Loads the about page
    {
        return view('pages.about');
    }
}
