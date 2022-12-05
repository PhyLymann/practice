<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use App\Events\PostNotify;


class PostController extends Controller
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
        
        $posts = $query->orderBy('id', 'desc')->paginate(8);

        $categories = Category::all();

        return view('post.listing', compact('posts', 'categories'));
    }


    public function myPost(Request $request)
    {
        $category = $request->c;
        //Limit post on home page
        $query = Post::query();

        if($category)
        {
            $query->where('category_id', $category);
        }
        
        $posts = $query->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(6);

        $soft_deleted = Post::onlyTrashed()->get();
        
        $categories = Category::all();

        return view('post.my-listing', compact('posts', 'categories', 'soft_deleted'));
    }

    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }
    
     public function store(Request $request) 
     {
        // dd($request->all());
        $request->validate([
            'category' => 'required',
            'title' => 'required|max:100',
            'price' => 'nullable',
            'image' => 'required|image',
            'description' => 'required|max:10000'
        ],[],[
            'cateogry' => __('post.category')
        ]);
        

        $image = $request->image->store('post');

        $post = Post::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' =>  $image,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => Auth::user()->id
        ]);

        // $category = Category::find($request->category);
        
        // $post->category()->associate($category);
        
        $post->save();

        $post->tag()->attach($request->tag);

        PostNotify::dispatch();

        return redirect()->back()->with('message', 'Ads was successful added.!');
     }

     public function edit($id)
     {
         $post = Post::findOrFail($id);

         $tag_post = $post->tag->pluck('id')->toArray();

         $categories = Category::all();
  
         $tags = Tag::all();
 
         return view('post.edit', compact('categories', 'tags', 'post', 'tag_post'));
     }

     //Update post or Edit post 

    public function update($id, Request $request) 
    {

        $post = Post::findOrFail($id);

        $request->validate([
            'category' => 'required',
            'title' => 'required|max:100',
            'price' => 'required|numeric',
            'image' => 'image',
            'description' => 'required|max:10000'
        ]);
        

        if($request->image)
        {
            $image = $request->image->store('post');
        }
        else
        {
            $image = $post->image;
        }

        

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'image' =>  $image,
            'description' => $request->description,
            //'category_id' => $request->category,
            'user_id' => Auth::user()->id
        ]);

        $category = Category::find($request->category);
        
        $post->category()->associate($category);
        
        $post->save();

        //$tag_post = $post->tag->pluck('id')->toArray();


        //$post->tag()->disttach($tag_post);

 
        $post->tag()->sync($request->tag);



        return redirect()->back()->with('message', 'Ads was successful update.!');
     }

     public function show($id)
     {
        $post = Post::where('id', $id)->first();

        $similars = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(4)->get();
  
         return view('post.detail', compact('post', 'similars'));
     }

     public function delete($id)
     {
        $post = Post::where('user_id', Auth::user()->id)->where('id', $id)->first();

        if(! $post)
        {
            return redirect()->back()->with('error', 'Post not found');

        }

        $post->delete();

        return redirect()->back()->with('message', 'You have sucessfully deleted your post');
    }


    public function restore($id)
     {
        $post = Post::onlyTrashed()->where('user_id', Auth::user()->id)->where('id', $id)->first();

        if(! $post)
        {
            return redirect()->back()->with('error', 'Post not found');

        }

        $post->restore();

        return redirect()->back()->with('message', 'You have sucessfully restored your post');
    }

    public function empty($id)
     {
        $post = Post::onlyTrashed()->where('user_id', Auth::user()->id)->where('id', $id)->first();

        if(! $post)
        {
            return redirect()->back()->with('error', 'Post not found');

        }

        $post->forceDelete();

        return redirect()->back()->with('message', 'You have sucessfully deleted your post forever.');
    }
    
}
