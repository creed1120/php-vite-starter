<?php

// Initial setup
if($_SERVER['HTTP_HOST'] === 'localhost:3001') {
	define('MODE_DEV', true);
} elseif($_SERVER['HTTP_HOST'] === 'localhost:8000') {
	define('MODE_DEV', false);
}
// define('MODE_DEV', '%MODE%' === 'production');

define('ROOT', __DIR__);

define('BASE_PATH', dirname(ROOT) . '/');

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

// Auto loads classes from the /system folder
spl_autoload_register(function ($class) {
	require base_path('system/' . $class . '.php');
});

require_existing('functions.php');
// require_existing('system/Database.php');
// require_existing('system/Response.php');
require_existing('vendor/autoload.php');
require_existing('configs/env.php');
require_existing('configs/router.php');

// try {
// 	require_existing('configs/router.php');
// } catch (\Throwable $th) {
// 	die('Error: ' . $th->getMessage());
// }