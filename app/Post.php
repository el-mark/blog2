<?php

namespace App;
use Carbon\Carbon;

// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $guarded = [];
    // $post->comment
    public function comments()
    {
    	// return $this->hasMany('App\Comment');
    	return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addComment($body)
    {
        // Comment::create([
        // 	'body' => $body,
        // 	'post_id' => $this->id
        // ]);
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            // dd($month);
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at',$year);
        }
    }
}
