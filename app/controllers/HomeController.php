<?php

namespace App\Controllers;

use App\Models\Story;

class HomeController
{
    public function index()
    {
        $stories = Story::all();
        // dd($stories);
        return view('home', compact('stories'));
    }
}
