<?php

declare(strict_types=1);

namespace tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{

    public function test_create_pokemon()
    {
        $pokemon = new Pokemon("Charizard", 1);
        $this->assertSame(1, $pokemon->id);
    }

    public function test_get_pokemon_name()
    {
        $pokemon = new Pokemon("Charizard", 1);
        $this->assertSame("Charizard", $pokemon->name);
    }

    public function test_get_pokemon_image()
    {
        $pokemon = new Pokemon("Charizard", 1);
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/charizard.png", $pokemon->getImageUrl());
    }
}
