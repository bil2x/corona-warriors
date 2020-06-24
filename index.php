<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
$router = new Router;

Router::load('routes.php')->direct(Request::uri(), Request::method());
