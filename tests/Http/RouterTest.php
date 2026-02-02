<?php

declare(strict_types=1);

use App\Exceptions\NotFound;
use App\Http\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{

    public function test_route_request()
    {
        $router = new Router();

        $router->define([
            'test' => __DIR__ . '/../controllers/pokedex.php'
        ]);

        ob_start();
        $router->direct('test');
        $output = ob_get_clean();

        $this->assertSame('', $output);
    }

    public function test_route_not_found()
    {
        $this->expectException(App\Exceptions\NotFound::class);

        $router = new Router();

        $router->direct('/test.php');
    }
}
