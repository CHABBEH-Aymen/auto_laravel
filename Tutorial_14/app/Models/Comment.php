<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    protected $fillable = ['content'];
    public function commentable()
    {
        return $this->morphTo();
    }


    public static function LastComments(){

        // $articles = Article::orderBy('id', 'desc')->take(10)->get();
        // $articles = Comment::latest()->take(1)->get();
        return Comment::latest()->take(2)->get();
    }
}
