<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'content' => 'required',
            'img' => 'required|mimes:jpg,png',
        ]);

        $slug = Str::slug($request->title, '_');

        $newImgName = uniqid() . '-' . $slug . '.' . $request->img->extension();
        $request->img->move(public_path('images'),$newImgName);

        Post::create([
            'slug'          => $slug,
            'title'         => $request->title,
            'description'   => $request->content,
            'categories'    => $request->categories,
            'img_path'      => $newImgName
        ]);

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('/post')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('/post_edit')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'content' => 'required',
            'img' => 'required|mimes:jpg,png',
        ]);

        $newImgName = uniqid() . '-' . $slug . '.' . $request->img->extension();
        $request->img->move(public_path('images'),$newImgName);

        Post::where('slug',$slug)->update([
            'slug'          => $slug,
            'title'         => $request->title,
            'description'   => $request->content,
            'categories'    => $request->categories,
            'img_path'      => $newImgName
        ]);

        return redirect('/blog/'.$slug)->with('message','Modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog')->with('message','Deleted successfully');
    }
}
