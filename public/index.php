<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use \Bramus\Router\Router;

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

$router = new Router();

$router->get('/(\d+)', '\App\CurrencyController@index');

$router->run();

?>