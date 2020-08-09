<?php

namespace App\Controllers;

use App\Models\Admin\Users;
use App\Models\Article;

class AdminController
{

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
        $addUser = Users::addUser(compact('name', 'password', 'email'));

        //dd($addUser);
        if ($addUser == 1) {
            $users = Users::all();
            //dd($users);
            return view('admin/users', compact('users'));
        }

        //dd(request());
    }


    public function login()
    {

        if (isset($_SESSION['id'])) {
            redirect('admin/home');
        }
        return view('admin/admin');
    }

    public function logincheck()
    {

        $email = request('email');
        $pass = request('password');

        //dd($email);
        if (($email == '') || ($pass == '')) {
            return redirect('admin');
        }
        //  die('9++');

        $_SESSION['id'] = 1;
        redirect('admin/home');
    }

    public function index()
    {
        if (!isset($_SESSION['id'])) {
            redirect('admin');
        }
        return view('admin/home');
    }
    public function users()
    {
        if (!isset($_SESSION['id'])) {
            redirect('admin');
        }

        $users = Users::all();
        return view('admin/users', compact('users'));
    }


    public function articles()
    {
        if (!isset($_SESSION['id'])) {
            redirect('admin');
        }
        return view('admin/articles', [
            'articles' => Article::all()
        ]);
    }

    public function logout()
    {
        unset($_SESSION['id']);
        session_destroy();
        redirect('admin');
    }
}
