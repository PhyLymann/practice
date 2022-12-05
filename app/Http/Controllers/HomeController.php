<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        //Limit post on home page
        $posts = Post::orderBy('id', 'desc')->limit(4)->get();
        return view('home', compact('posts'));
    }
   
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function shopping()
    {
        return view('shopping');
    }
    public function developer()
    {
        return view('developer');
    }
    public function responsive()
    {
        return view('layout.pastor');
    }
    public function more()
    {
        return view('information.personal');
    }
    public function video()
    {
        return view('video');
    }
}
