<?php

namespace App\Controllers;

use App\Models\Article;

class ArticlesController
{

    public function index()
    {
        $articles = Article::all();
        return view('articles/index', ['articles' => $articles]);
    }
    public function show()
    {
        $article = Article::fetch(['id' => request('id')]);
        //dd($article);
        return view('articles/show', compact('article'));
    }
}
