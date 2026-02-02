<?php

declare(strict_types=1);

namespace App;

class Pokemon
{
    public function __construct(public string $name, public int $id) {}

    public function getImageUrl(): string
    {
        $imageName = str_replace(['♀', '♂'], ['-f', '-m'], strtolower($this->name));
        return "https://img.pokemondb.net/sprites/bank/normal/$imageName.png";
    }
}
