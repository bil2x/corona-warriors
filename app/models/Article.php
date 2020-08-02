<?php

namespace App\Models;

use App\Core\App;

class Article
{
    public static function all()
    {
        return App::get('database')->selectAll('articles');
    }

    public static function fetch(array $col)
    {
        $column = array_key_first($col);
        [$column => $val] = $col;
        return App::get('database')->select('articles', $column, $val);
    }
}
