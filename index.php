<?php

use Router\Router;

require './vendor/autoload.php';

define('VIEWS', './Views' . DIRECTORY_SEPARATOR);
define('ASSETS', './public' . DIRECTORY_SEPARATOR);

$router = isset($_GET['page']) ? new Router($_GET['page']) : new Router('') ;

$router->get('/', 'App\Controllers\DefaultController@index');
$router->get('/:id', 'App\Controllers\DefaultController@show');
$router->get('/portfolio/:id', 'App\Controllers\PortfolioController@show');

$router->run();