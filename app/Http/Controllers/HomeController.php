<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if you don’t put with() here, you will have N+1 query performance problem

        $posts = Post::with('category', 'tags')->take(3)->latest()->get();

        return view('pages.home', compact('posts'));
    }
}
