<?php

declare(strict_types=1);

namespace tests;

use App\Http\Request;
use App\Pokemon;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{

    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = '/pokedex?sort=asc';
        $this->assertSame('/pokedex', Request::uri());
    }
}
