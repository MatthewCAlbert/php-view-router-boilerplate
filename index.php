<?php
require __DIR__ . '/vendor/autoload.php';

use Jenssegers\Blade\Blade;
use Bramus\Router\Router;

// enable env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if( $_ENV['PRODUCTION'] ){
    error_reporting(0);
}

// Create cache folder if not exists
if (!file_exists('cache')) {
    mkdir('cache', 0775, true);
}

// Create Router instance
$router = new Router();

// Create Blade instance
$blade = new Blade(env("ROOT_DIR").'views', env("ROOT_DIR").'cache');

// Define routes
require_once 'routes.php';

// Start
$router->run();