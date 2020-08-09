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
    public static function create($data)
    {
        return App::get('database')->insert('articles', $data);
    }
    public static function update($data, $where)
    {
        //dd($data);
        return App::get('database')->update('articles', $data, $where);
    }
    public static function delete($id)
    {
        return App::get('database')->delete('articles', $id);
    }
}
