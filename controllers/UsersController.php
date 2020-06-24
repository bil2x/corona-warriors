<?php

class UsersController
{

    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users', 'tasks'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}
