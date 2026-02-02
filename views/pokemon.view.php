<?php

use App\Pokemon;

$imageName = str_replace(['♀', '♂'], ['-f', '-m'], strtolower($pokemon->name));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>

<body>
    <h1><?= $pokemon->name; ?></h1>

    <img src="<?= $pokemon->getImageUrl(); ?>" alt="<?= $pokemon->name; ?>">

</body>

</html>