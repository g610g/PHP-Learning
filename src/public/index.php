<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";

use App\Resource\Route;
use App\TestController;

session_start();

$route = new Route();

$route->get('/test', [TestController::class, 'store']);
$route->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);