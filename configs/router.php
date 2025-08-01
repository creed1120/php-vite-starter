<?php
/**
 * Route the request to the appropriate controller based on the URI.
 *
 * @param string $uri The request URI.
 * @param array $routes The defined routes.
 */

$routes = require('./configs/routes.php');

function routeToController($uri, $routes) {
	if( array_key_exists($uri, $routes) ) {
		require $routes[$uri];
	} else {
		abort();
	}
}

function abort($status_code = 404) {
	http_response_code($status_code);
	require("/controllers/{$status_code}.php");
	die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);