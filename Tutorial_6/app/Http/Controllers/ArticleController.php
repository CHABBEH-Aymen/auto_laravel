<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticleController extends Controller
{
    public function index() {
        // Simuler une liste d'articles
        $articles = [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Lorem ipsum...'],
            ['id' => 2, 'title' => 'Pourquoi choisir Laravel ?', 'content' => 'Lorem ipsum...']
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $articles = [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Lorem ipsum...'],
            ['id' => 2, 'title' => 'Pourquoi choisir Laravel ?', 'content' => 'Lorem ipsum...']
        ];
        $article = Arr::first($articles, fn($article)=> $article['id'] == $id);
        return view('articles.show', compact('article'));
    }
}
