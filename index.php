<?php
// Initial setup

define('ROOT', __DIR__);
define('MODE_DEV', '%MODE%' === 'development');

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

require_existing('functions.php');
require_existing('vendor/autoload.php');
require_existing('configs/env.php');
require_existing('configs/router.php');

// try {
// 	require_existing('configs/router.php');
// } catch (\Throwable $th) {
// 	die('Error: ' . $th->getMessage());
// }