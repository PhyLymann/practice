<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->c;

        $search = $request->search;

        //Limit post on home page
        $query = Post::query();

        if($category)
        {
            $query->where('category_id', $category);
        }

        if($search)
        {
           $query->where('title', 'like', "%$search%"); 
        }
        
        $posts = $query->orderBy('id', 'desc')->paginate(6);

        $categories = Category::all();

        return view('admin.post.category', compact('posts', 'categories'));
    }

    public function show($id)
     {
        $post = Post::where('id', $id)->first();

        $similars = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(4)->get();
  
         return view('admin.post.detail', compact('post', 'similars'));
     }
}
