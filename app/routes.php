<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('articles', 'ArticlesController@show');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('admin', 'AdminController@login');
$router->post('admin', 'AdminController@logincheck');
$router->get('admin/logout', 'AdminController@logout');


$router->get('admin/home', 'AdminController@index');

$router->get('admin/users', 'AdminController@users');
$router->post('admin/users', 'AdminController@store');

$router->get('admin/posts', 'AdminController@posts');
