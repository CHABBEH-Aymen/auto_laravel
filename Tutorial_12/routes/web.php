<?php

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', function () {
    
    $articles = Article::with('tags')->get();
    return $articles;
});
Route::get('/tags', function () {
    
    $tags = Tag::with('articles')->get();
    return $tags;
});
Route::get('/AjouteComment', function () {
    
    $article = Article::find(1);
    // $article->comments()->create(['content' => 'Super article !']);
    return $article->comments;
});
Route::get('/AjouteCommentVideo', function () {
    
    $video = Video::find(1);
    $video->comments()->create(['content' => 'Vidéo incroyable !']);
    return $video->comments;
});
Route::get('/Commentcommentable', function () {
    
    $comment = Comment::find(1);
    $comment->commentable;
    return $comment->commentable;
});
Route::get('/Comments', function () {
    
    return Comment::all();
});
Route::get('/Lastcomments', function () {
    
   
    return Comment::LastComments();
});
