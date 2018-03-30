<?php


require 'vendor/autoload.php'; 
$query = require 'core/bootstrap.php' ;
use App\Core\{Router,Request}; 

// die(var_dump($app));
 Router::load('app/routes.php')
		->direct(Request::uri(),Request::method());
