<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    /**
     * getHomePage
     * returns home.blade,php
     */
    public function getHomePage()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        // dd($blogs[0]->blog_image['original']);
        return view('home',['blogs'=> $blogs]);
    }
}
