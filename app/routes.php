<?php

$router->get('login', 'Auth\LoginController@create');
$router->post('login', 'Auth\LoginController@attemptLogin');

$router->get('login', 'Auth\LoginController@create');
$router->get('logout', 'Auth\LoginController@destroy');


$router->get('register', 'Auth\RegisterController@create');
$router->post('register', 'Auth\RegisterController@store');

$router->get('reset', 'Auth\ResetController@create');
$router->post('reset', 'Auth\ResetController@sendPasswordLink');

// $router->get('home', 'PagesController@home');
$router->get('', 'PagesController@index');
//$router->get('create', 'StoriesController@create');
// $router->get('list', 'PagesController@list');

$router->get('clients', 'PagesController@clients');

$router->get('stories', 'StoriesController@index');
$router->get('story', 'StoriesController@show');
$router->get('story/create', 'StoriesController@create');
$router->post('story/create', 'StoriesController@store');

$router->get('story/edit', 'StoriesController@edit');
$router->post('story/edit', 'StoriesController@update');

$router->get('story/delete', 'StoriesController@destroy');

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