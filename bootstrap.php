<?php

declare(strict_types=1);

use App\Http\Router;
use App\Database\Connection;
use App\Database\QueryBuilder;

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv;
$dotenv->load(__DIR__ . '/.env');


$config = require_once __DIR__ . '/config.php';

$database = new QueryBuilder(Connection::make($config['driver'], $config['host'], $config['database'], $config['username'], $config['password']));
