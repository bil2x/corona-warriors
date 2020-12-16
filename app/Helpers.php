<?php

use App\Core\Request;
use App\Core\App;

function view($name, $data = [])
{
    extract($data);
    require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location:/{$path}");
}

function dd($var)
{
    die(var_dump($var));
}

function request($var = '')
{
    if (!empty($var))
        return $_REQUEST[$var];
    return $_REQUEST;
}
function file_request($var = '')
{
    if (!empty($var))
        return $_FILES[$var];
    return $_FILES;
}
function file_upload($src, $dest)
{
    $res = move_uploaded_file($src, $dest);
    return $res;
}

function multi_file_upload($images)
{
    foreach ($images as $temp => $perm) {
        $res[] = move_uploaded_file($temp, $perm);
    }
    return $res;
}
function route()
{
    return Request::uri();
}
function auth()
{
    return $_SESSION['current_user'];
}

function getimage($column, $value, $limit = 100, $offset = 0)
{
    return App::get('database')->selectM('images', 'location', $column, $value, $limit, $offset);
}
function admin()
{
    return !$_SESSION['role'] ??= 1;
}
