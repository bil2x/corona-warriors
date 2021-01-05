<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function create()
    {
        if (!admin())
            return redirect('admin');

        return view('admin/users/create');
    }
    public function store()
    {
        //validate the data         
        $password = request('password');
        $name = request('name');
        $email = filter_var(request('email'), FILTER_VALIDATE_EMAIL);

        if (empty($password) || empty($name) || empty($email))
            return redirect('admin/users');
        //if validation pass go to model with data and encrypted password
        $password = base64_encode($password);
        $res = User::addUser(compact('name', 'password', 'email'));

        if ($res)
            redirect('admin/users');
    }


    public function users()
    {
        if (!admin())
            return redirect('admin');

        $users = User::all();
        //dd($users);
        return view('admin/users/list', compact('users'));
    }
}
