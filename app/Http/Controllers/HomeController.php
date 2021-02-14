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
        return view('home', ['blogs' => $blogs]);
    }
    public function getBlog(Request $request)
    {
        $data = $request->query();
        $blog_id = $data['id'];

        $blog = Blog::where('id', $blog_id)->first();
        return response($blog);
    }
}
