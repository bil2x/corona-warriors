<?php

$router->get('login', 'Auth\LoginController@create');
$router->post('login', 'Auth\LoginController@attemptLogin');

$router->get('login', 'Auth\LoginController@create');
$router->get('logout', 'Auth\LoginController@destroy');


$router->get('register', 'Auth\RegisterController@create');
$router->post('register', 'Auth\RegisterController@store');

$router->get('reset', 'Auth\ResetController@create');
$router->post('reset', 'Auth\ResetController@sendPasswordLink');

$router->get('home', 'PagesController@home');
$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('clients', 'PagesController@clients');

$router->get('articles', 'ArticlesController@index');
$router->get('article', 'ArticlesController@show');
$router->get('article/create', 'ArticlesController@create');
$router->post('article/create', 'ArticlesController@store');

$router->get('article/edit', 'ArticlesController@edit');
$router->post('article/edit', 'ArticlesController@update');

$router->get('article/delete', 'ArticlesController@destroy');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('admin', 'AdminController@login');
$router->post('admin', 'AdminController@logincheck');
$router->get('admin/logout', 'AdminController@logout');


$router->get('admin/home', 'AdminController@index');

$router->get('admin/users', 'AdminController@users');
$router->post('admin/users', 'AdminController@store');

$router->get('admin/articles', 'AdminController@articles');


//dd($router);