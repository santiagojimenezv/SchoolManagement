<?php

namespace App\Http\Controllers;

use App\Models\post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);        
        /* $author_id = auth()->user()->id; FIXME: Fix auth for users */ 
        $author_id = 14;
        $date = Carbon::now();
        post::create([
            'title' => $request->title,
            'content'=> $request->content,
            'author_id' => $author_id,
            'date' => $date,
        ]);
        return redirect()->route('admin.posts.index')->with('success', 'Blog publicado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([

        ]);
        $post->update($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Blog actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Blog eliminado exitosamente');
    }
}
