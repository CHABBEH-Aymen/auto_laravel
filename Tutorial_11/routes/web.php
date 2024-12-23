<?php

use App\Models\Article;
use App\Models\Tag;
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
