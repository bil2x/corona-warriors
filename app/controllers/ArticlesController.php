<?php

namespace App\Controllers;

use App\Models\Article;

class ArticlesController
{
    public function show()
    {

        $article = Article::fetch(['id' => request('id')]);
        dd($article);
        return view('article', ['article' => $article]);
    }
}
