<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Project;

class PagesController
{
    public function home()
    {
        $project_list = Project::all();
        return view('index', compact('project_list'));
    }

    public function about()
    {
        $articles = Article::all();
        return view('about', ['articles' => $articles]);
    }

    public function contact()
    {
        return view('contact');
    }
    public function clients()
    {
        return view('clients');
    }
}
