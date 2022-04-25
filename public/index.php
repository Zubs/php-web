<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

$router->get('/', 'Controller@index');

$router->run();
