<?php

require __DIR__ . '/vendor/autoload.php';


use App\Exceptions\NotFound;
use App\Http\Router;
use App\Http\Request;

require_once __DIR__ . '/bootstrap.php';


$router = new Router;

require __DIR__ . '/views/routes.php';

try {
    require $router->direct(Request::uri());
} catch (NotFound $e) {
    require $router->direct('/404');
}
