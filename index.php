<?php
// Initial setup

// define('MODE_DEV', '%MODE%' === 'production');

if($_SERVER['HTTP_HOST'] === 'localhost:3001') {
	define('MODE_DEV', true);
	define('ROOT', dirname(__DIR__) . '/'); //<- need to pass __DIR__ to dirname() function when in development
} elseif($_SERVER['HTTP_HOST'] === 'localhost:8000') {
	define('MODE_DEV', false);
	define('ROOT', __DIR__ . '/'); //<- and just use __DIR__ when in production
}

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

// Auto loads classes from the /system folder
// spl_autoload_register(function ($class) {e
// 	require base_path('system/' . $class . '.php');
// });

// Database.php 	  <- Class loaded from Composer autoload.php
// Response.php 	  <- Class loaded from Composer autoload.php
// configs/router.php <- Class loaded from Composer autoload.php
require_existing('vendor/autoload.php'); // <- Autoloads all classes through Composer from Namspaces
require_existing('functions.php');
require_existing('configs/env.php');

$router = new configs\Router();

$routes = require base_path('configs/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// routeToController($uri, $routes);