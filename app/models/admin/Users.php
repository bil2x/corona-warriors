<?php

namespace App\Models\Admin;

use App\Core\App;

class Users
{
    public static function addUser($data)
    {
        return App::get('database')->insert('users', $data);
    }

    public static function all()
    {
        return App::get('database')->selectAll('users');
    }
}
