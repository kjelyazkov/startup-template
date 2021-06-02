<?php

use App\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'index');
$app->router->get('/home', 'home');
$app->router->get('/about', 'about');
// $app->router->get('/', function() {
//     return 'Hello World';
// });
// $app->router->get('/', [HomeController::class, 'index']);


$app->run();