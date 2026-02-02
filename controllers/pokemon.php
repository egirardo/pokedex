<?php

declare(strict_types=1);

use App\Exceptions\NotFound;
use App\Pokemon;

$id = isset($_GET['id']) ? $_GET['id'] : 1;

if ($id > 151) {
    throw new NotFound('404: URI Not Found');
}

$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->first();


$pokemon = new Pokemon($pokemon->name, (int)$pokemon->id);

require __DIR__ . '/../views/pokemon.view.php';
