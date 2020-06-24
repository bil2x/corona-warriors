<?php
$tasks = App::get('database')->selectAll('todos');
$users = App::get('database')->selectAll('users');
require 'views/index.view.php';
