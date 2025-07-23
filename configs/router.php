<?php

/***************************
 * Simple custom Routing
 ***************************/
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if( $uri === '/' ) {
// 	require 'controllers/index.php';
// } elseif($uri === '/about') {
// 	require 'controllers/about.php';
// } elseif($uri === '/contact') {
// 	require 'controllers/contact.php';
// }

$routes = [
	'/' => 'controllers/index.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
	if( array_key_exists($uri, $routes) ) {
		require $routes[$uri];
	} else {
		abort();
	}
}

function abort($status_code = 404) {
	http_response_code($status_code);
	require("./controllers/{$status_code}.php");
	die();
}

routeToController($uri, $routes);