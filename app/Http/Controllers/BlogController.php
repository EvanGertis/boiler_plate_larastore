<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return  view('blog.showall', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->id() == "1"){
            return view('/blog/create');
        }
        else {
            return redirect('blog')->withErrors("You are unable to create a post.");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'author' => ['required', 'min:3'],
            'title' => ['required', 'min:3'],
            'post' => ['required', 'min:3']
        ]);
        if(auth()->id() == "1"){
            Blog::create($attributes);
        }
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        if(auth()->id() == "1"){
            return view('blog.edit', compact('blog'));
        } else {
            return redirect('/blog')->withErrors("You don't have access to do that.");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if(auth()->id() == "1"){
            $attributes = request()->validate([
                'author' => ['required', 'min:3'],
                'title' => ['required', 'min:3'],
                'post' => ['required', 'min:3']
            ]);

            $blog->update($attributes);

            return redirect('blog');
        } else {
            return redirect('/blog')->withErrors("You don't have access to do that.");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(auth()->id() == "1"){
            $blog->delete();
            return redirect('/blog');
        } else {
            return redirect('/blog')->withErrors("You don't have access to do that.");
        }
    }
}
