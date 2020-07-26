<?php

namespace App\Models;

use App\Core\App;

class Article
{
    public static function all()
    {
        return App::get('database')->selectAll('articles');
    }
}
