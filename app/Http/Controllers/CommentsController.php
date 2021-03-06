<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function store (Post $post)
    {

    	$this->validate(request(), [
            'body' => 'required|min:2'
        ]);

     //    Comment::create([
     //    	'body' => request('body'),
     //    	'post_id' => $post->id
     //    ]);

    	$post->addComment(request('body'));

        // return redirect('/posts/' . $post->id .'');
        return back();
    }
}
