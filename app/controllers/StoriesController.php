<?php

namespace App\Controllers;

use App\Models\Story;

class StoriesController
{

    public function index()
    {
        $stories = Story::all();
        return view('stories/index', ['stories' => $stories]);
    }
    public function show()
    {
        // dd($_SESSION['current_user']->id);
        $article = Story::fetch(['id' => request('id')]);
        //dd($article[0]->user_id);
        return view('stories/show', compact('article'));
    }

    public function create()
    {
        // dd($_SESSION['current_user']->id);
        if (isset($_SESSION['current_user']) && !empty($_SESSION['current_user']))
            return view('stories/create');
        else
            redirect('login');
    }

    public function store()
    {
        $form_data = request();
        $file_data = file_request('image');
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
            redirect('stories/create');
        }
        // validation check end
        //for file uploading start
        $uploaddir = './public/storage/images/';
        $uploadfile = $uploaddir . time() . '_' . basename($file_data['name']);
        $form_data['image'] = $uploadfile;

        file_upload($file_data['tmp_name'], $uploadfile);


        $story = Story::create($form_data);

        if ($story) {
            return redirect('stories', [
                'stories' => Story::all()
            ]);
        }
    }
    public function edit()
    {
        $story = Story::fetch(['id' => request('id')]);
        // dd($story);
        return view('stories/edit', compact('story'));
    }

    public function update()
    {
        // dd(request());
        $file_data = file_request('image');
        if ($file_data) {
            //for file uploading start
            $uploaddir = './public/storage/images/';
            $uploadfile = $uploaddir . time() . '_' . basename($file_data['name']);
            $form_data['image'] = $uploadfile;

            file_upload($file_data['tmp_name'], $uploadfile);
        }
        $res = Story::update([
            'title' => request('title'),
            'name' => request('name'),
            'video' => request('video'),
            'state' => request('state'),
            'district' => request('district'),
            'location' => request('location'),
            'keywords' => request('keywords'),
            'image' => $uploadfile
        ], request('id'));
        // dd($res);

        if ($res)
            redirect('stories/');
    }

    public function destroy()
    {
        $res = Story::delete(request('id'));
        if ($res)
            redirect('stories/');
    }
}
