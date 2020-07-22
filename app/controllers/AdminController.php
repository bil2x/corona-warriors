<?php

namespace App\Controllers;

class AdminController 
{
    
    public function login()
    {
        return view('admin/admin');
    }
   
    public function logincheck()
    {

        $email = request('email');
        $pass = request('password');

        //dd($email);
        if(($email=='') || ($pass==''))
        {
           return redirect('admin');
        }
          //  die('9++');

        $_SESSION['id']=1;
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
        return view('admin/users');
    }
    public function posts()
    {
        return view('admin/posts');
    }
    
    public function logout()
    {
        unset($_SESSION['id']);
        session_destroy();
        redirect('admin');
    }
    
}