<?php

namespace App\Controllers;

use App\Models\Image;
use App\Models\User;
use App\Models\Story;

class AdminController
{
    public function index()
    {
        if (admin())
            redirect('admin/dashboard');
        return view('admin/index');
    }

    public function logincheck()
    {

        $email = request('email');
        $pass = request('password');
        if (($email == '') || ($pass == '')) {
            return redirect('admin');
        }
        $res = User::check([
            'email' => $email,
            'password' => $pass
        ]);
        $privilege = $res[0]->role;
        if (!isset($privilege)) {
            $_SESSION['error']['message'] = 'Your email or password invalid';
            return view('admin/index');
        } elseif ($privilege) {
            $_SESSION['error']['message'] = 'You don\'t have admin previlege';
            return view('admin/index');
        }
        unset($_SESSION['error']);
        $_SESSION['role'] = $privilege;
        return redirect('admin/dashboard');
    }

    public function dashboard()
    {
        // dd($_SESSION);
        if (!admin())
            return redirect('admin');
        $users = User::all();
        $stories = Story::all();
        $images = Image::all();
        return view('admin/dashboard', [
            'users' => $users,
            'stories' => $stories,
            'images' => $images
        ]);
    }
    public function images()
    {
        if (!admin())
            return redirect('admin');

        $images = Image::all();
        //dd($users);
        return view('admin/images', compact('images'));
    }

    public function stories()
    {
        if (!admin())
            return redirect('admin');
        return view('admin/stories', [
            'stories' => Story::all()
        ]);
    }
    public function publish()
    {
        // dd(request('id'));
        $res = Story::update([
            'status' => 1
        ], request('id'));
        // dd($res);
        if ($res)
            redirect('admin/stories');
    }
    public function delete()
    {
        $res = Story::delete(request('id'));
        if ($res)
            redirect('admin/stories');
    }
    public function imagedelete()
    {
        // dd(request('id'));
        $res = Image::delete(request('id'));
        if ($res)
            redirect('admin/images');
    }
    public function logout()
    {
        // dd('logout');
        unset($_SESSION['role']);
        session_destroy();
        return redirect('admin');
    }
}
