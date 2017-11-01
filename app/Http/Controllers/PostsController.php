<?php

namespace App\Http\Controllers;


use App\Post;

use App\Repositories\Posts;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);   
    }

    public function index()
    {
        $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at)year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

        // SQL QUERY
        // ############
        // select 
        // year(created_at) year,
        // monthname(created_at) month,
        // count(*) published
        // from posts
        // group by year, month
        // order by min(created_at)desc

    	return view('posts.index', compact('posts', 'archives'));


        // Code from a conflict

        // $posts = $posts->all(); needs this: public function index(Posts $posts)

        // $posts = Post::latest()
        //     ->filter(request(['month', 'year']))
        //     ->get();

        // $posts = Post::latest();
        
        // if ($month = request('month')) {
        //     // dd($month);
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if ($year = request('year')) {
        //     $posts->whereYear('created_at',$year);
        // }

        // $posts = $posts->get();

    	// return view('posts.index', compact('posts'));

    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {

        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        // $post->save();

        $this->validate(request(), [
            'title' => 'required|min:5',
            'body' => 'required'
        ]);
        
        // //sin user_id
        // Post::create(request(['title','body']));

        // //Opcion 1: con user_id
        // Post::create(([
        //     'title' => request('title'), 
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]));

        // //Opcion 2: con user_id
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'Your post has been published.');

        return redirect('/');
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $post->delete();
        Post::delete();

        return redirect('/');
    }
}
