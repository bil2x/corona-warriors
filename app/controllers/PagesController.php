<?php

namespace App\Controllers;

use App\Models\Story;

class PagesController
{

    public function index()
    {
        $stories = Story::all();
        //dd($stories);
        return view('index', compact('stories'));
    }
    public function create()
    {
        return view('addstory');
    }

    public function list()
    {
        return view('liststory');
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
