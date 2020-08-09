<?php

use App\Core\Request;

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

function route()
{
    return Request::uri();
}
