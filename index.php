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
// spl_autoload_register(function ($class) {
// 	require base_path('system/' . $class . '.php');
// });

// Database.php <- Class loaded from Composer autoload.php
// Response.php <- Class loaded from Composer autoload.php
require_existing('vendor/autoload.php');
require_existing('functions.php');
require_existing('configs/env.php');
require_existing('configs/router.php');

// try {
// 	require_existing('configs/router.php');
// } catch (\Throwable $th) {
// 	die('Error: ' . $th->getMessage());
// }