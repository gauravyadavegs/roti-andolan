<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $admin_email = $request->user()->email;
        if ($admin_email == 'admin@rotiandolan.com') {
            $members_list = Member::paginate(100);
            return view('membersList', ['members' => $members_list]);
        } else {
            $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);

            return view('home', ['blogs' => $blogs]);
        }
    }

    public function uploadBlogsPage(Request $request)
    {
        $admin_email = $request->user()->email;
        if ($admin_email == 'admin@rotiandolan.com') {

            return
            // redirect()->back()->with('success', 'blog uploaded successfully');
             view('blogsUpload');
        } else {
            // return redirect()->back()->with('error', 'Something went wrong');
            $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);

            return view('home',['blogs'=> $blogs]);
        }
    }
    public function uploadBlogs(Request $request)
    {
        $admin_email = $request->user()->email;
        // $this->validateBlog($request);

        $data = $request->all();
        $blog = Blog::create($data);
        if ($admin_email == 'admin@rotiandolan.com') {

            if ($request->hasFile('blog_image')) {
                $blog->addMedia($request->file('blog_image'))->toMediaCollection('blog_image');
            }
            return redirect()->back()->with('success', 'blog uploaded successfully');

        } else {
            return redirect()->back()->with('error', 'Something went wrong');

        }
    }
    private function validateBlog($request)
    {
        $request->validate([
            'description' => 'required|max:1000'
        ]);
    }
}
