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

    public function create()
    {
        return view('articles/create');
    }

    public function store()
    {
        $form_data = request();
        //validation check start
        $field = [];
        foreach ($form_data as $key => $data) {
            if (empty($data)) {
                $field[] = $key;
            }
        }

        if (!empty($field)) {
            foreach ($field as $val) {
                $_SESSION['error'][$val] = ucwords($val) . " field is required";
            }
            //dd($_SESSION);
            redirect('article/create');
        }
        // validation check end
        //dd($form_data);
        $article = Article::create($form_data);

        if ($article) {
            return redirect('articles', [
                'articles' => Article::all()
            ]);
        }
    }
    public function edit()
    {
        $article = Article::fetch(['id' => request('id')]);
        return view('articles/edit', compact('article'));
    }

    public function update()
    {
        $res = Article::update([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ], request('id'));

        if ($res)
            redirect('articles/');
    }

    public function destroy()
    {
        $res = Article::delete(request('id'));
        //dd($res);
        if ($res)
            redirect('articles/');
    }
}
