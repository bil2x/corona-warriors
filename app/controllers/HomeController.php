<?php

namespace App\Controllers;

use App\Models\Story;

class HomeController
{
    public function index()
    {
        $stories = Story::all();
        return view('home', compact('stories'));
    }
}
