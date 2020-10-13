<?php

namespace App\Models;

use App\Core\App;

class Story
{
    public static function all()
    {
        return App::get('database')->selectAll('stories');
    }

    public static function fetch(array $col)
    {
        $column = array_key_first($col);
        [$column => $val] = $col;
        return App::get('database')->select('stories', $column, $val);
    }
    public static function create($data)
    {
        //dd($data);
        $response = App::get('database')->insert('stories', $data);
        //dd($response);
        return $response;
    }
    public static function update($data, $where)
    {
        //dd($data);
        return App::get('database')->update('stories', $data, $where);
    }
    public static function delete($id)
    {
        return App::get('database')->delete('stories', $id);
    }
}
