<?php

namespace App\Controllers;

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
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
