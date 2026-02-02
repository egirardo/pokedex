<?php

declare(strict_types=1);

$router->define([
    '/' => __DIR__ . '/../controllers/pokedex.php',
    '/pokemon' => __DIR__ . '/../controllers/pokemon.php',
    '/404' => __DIR__ . '/../views/404.view.php'
]);
