<?php
require 'core/bootstrap.php';
// var_dump($_SERVER['DOCUMENT_ROOT']);
// die();
$router = new Router;

require Router::load('routes.php')->direct(Request::uri());
