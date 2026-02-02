<?php

declare(strict_types=1);

use App\Pokemon;

$monsters = $database->select()->from('pokemon')->get();

$pokemon = array_map(function ($monster) {
    return new Pokemon($monster->name, (int)$monster->id);
}, $monsters);

require __DIR__ . '/../views/pokedex.view.php';
