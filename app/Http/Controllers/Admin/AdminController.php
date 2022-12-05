<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;


class AdminController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('admin.post.create', compact('categories', 'tags'));
    }
    public function admin()
    {
        return view('admin.layout.admin');
    }

    public function loginForm()
    {
        return view ('admin.auth.login');
    }

    public function login(Request $request)
    {
      
        
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($credential))
        {
            $request->session()->regenerate();

            return redirect()->to('/admin');
        }

        return redirect()->back()->withErrors('Incorrect Credential');
    }
    
    public function delete($id)
    {
        $post = Post::find($id);
        // dd($post);
        if(! $post)
        {
            return redirect()->back()->with('error', 'Post not found');

        }

        $post->delete();

        return redirect()->back()->with('message', 'You have sucessfully deleted your post');
    } 

    public function edit($id)
    {
        $post = Post::find($id);
        // dd($post);
        if(! $post)
        {
            return redirect()->back()->with('error', 'Post not found');

        }

        $tag_post = $post->tag->pluck('id')->toArray();

        $categories = Category::all();
  
        $tags = Tag::all();

        return view('admin.post.edit', compact('categories', 'tags', 'post', 'tag_post'));
    } 

    
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



        return view('admin.post.listing')->with('message', 'Ads was successful update.!');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = $request->c;

        $search = $request->search;

        $query = Post::query();

        if($category)
        {
            $query->where('category_id', $category);
        }

        if($search)
        {
           $query->where('title', 'like', "%$search%"); 
        }

        $categories = Category::all();

        $posts = $query->orderBy('id', 'desc')->paginate(8);

        return view('admin.post.listing', compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    
}
