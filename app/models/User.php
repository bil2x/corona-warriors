<?php

namespace App\Models;

use App\Core\App;

class Users
{
    public static function create($data)
    {
        return App::get('database')->insert('users', $data);
    }

    public static function all()
    {
        //dd('model');
        return App::get('database')->selectAll('users');
    }
}
