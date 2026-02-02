<?php

declare(strict_types=1);

namespace App\Http;

use Exception;
use App\Exceptions\NotFound;

class Router
{
    protected array $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get(string $uri, callable $action): void
    {
        $this->routes[$uri] = $action;
    }
    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new NotFound('404: URI Not Found');
    }
}
