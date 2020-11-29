<?php

namespace App\Controllers;

use App\Models\Story;

class StoriesController
{

    public function index()
    {
        $stories = Story::all();
        //dd($stories);
        return view('stories/index', ['stories' => $stories]);
    }
    public function show()
    {
        //dd($_REQUEST);
        $article = Story::fetch(['id' => request('id')]);
        //dd($article);
        return view('stories/show', compact('article'));
    }

    public function create()
    {
        return view('stories/create');
    }

    public function store()
    {
        $form_data = request();
        $file_data = file_request('image');
        //dd($file_data);
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
            redirect('stories/create');
        }
        // validation check end
        //dd($form_data);
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
        $article = Story::fetch(['id' => request('id')]);
        return view('stories/edit', compact('article'));
    }

    public function update()
    {
        $res = Story::update([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ], request('id'));

        if ($res)
            redirect('stories/');
    }

    public function destroy()
    {
        $res = Story::delete(request('id'));
        //dd($res);
        if ($res)
            redirect('stories/');
    }
}
