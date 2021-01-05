<?php
$router->get('', 'HomeController@index');

$router->get('login', 'Auth\LoginController@create');
$router->post('login', 'Auth\LoginController@attemptLogin');

$router->get('login', 'Auth\LoginController@create');
$router->get('logout', 'Auth\LoginController@destroy');

$router->get('register', 'Auth\RegisterController@create');
$router->post('register', 'Auth\RegisterController@store');

$router->get('reset', 'Auth\ResetController@create');
$router->post('reset', 'Auth\ResetController@sendPasswordLink');

$router->get('stories', 'StoriesController@index');
$router->get('story', 'StoriesController@show');
$router->get('story/create', 'StoriesController@create');
$router->post('story/create', 'StoriesController@store');
// $router->get('story/{id}', 'StoriesController@show');

$router->get('story/edit', 'StoriesController@edit');
$router->post('story/edit', 'StoriesController@update');

$router->get('story/delete', 'StoriesController@destroy');

// Admin Panel Routes
$router->get('admin', 'AdminController@index');
$router->post('admin', 'AdminController@logincheck');
$router->get('admin/logout', 'AdminController@logout');

$router->get('admin/dashboard', 'AdminController@dashboard');

$router->get('admin/users', 'UsersController@users');
$router->get('admin/users/create', 'UsersController@create');
$router->post('admin/users/create', 'UsersController@store');

$router->get('admin/stories', 'AdminController@stories');
$router->get('admin/publish', 'AdminController@publish');
$router->get('admin/delete', 'AdminController@delete');
$router->get('admin/images', 'AdminController@images');
$router->get('admin/images/delete', 'AdminController@imagedelete');


//dd($router);