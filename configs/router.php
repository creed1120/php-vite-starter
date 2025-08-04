<?php
/**
 * Route the request to the appropriate controller based on the URI.
 *
 * @param string $uri The request URI.
 * @param array $routes The defined routes.
 */

namespace configs;

class Router {

	protected $routes = [];

	protected function add($method, $uri, $controller)
    {
		// $this->routes[] = compact('method', 'uri', 'controller');

		/**
		 * The above add() function is a shorter version of this code which
		 * compoact() function 
		 */
		$this->routes[] = [
			'uri' 		 => $uri,
			'controller' => $controller,
			'method' 	 => $method
		];
    }

	public function get($uri, $controller) {
		$this->add('GET', $uri, $controller);
	}

	public function post($uri, $controller) {
		$this->add('POST', $uri, $controller);
	}

	public function delete($uri, $controller) {
		$this->add('DELETE', $uri, $controller);
	}

	public function update($uri, $controller) {
		$this->add('UPDATE', $uri, $controller);
	}

	public function patch($uri, $controller) {
		$this->add('PATCH', $uri, $controller);
	}

	public function put($uri, $controller) {
		$this->add('PUT', $uri, $controller);
	}

	/**
	 * Routes uri given to the corresponding controller
	 *
	 */
	public function route($uri, $method) {

		foreach($this->routes as $route) {
			if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
				return require base_path($route['controller']);
			}
		}

		$this->abort();
	}

	// aborts to the error page i.e page not found
	public function abort($status_code = 404) {
		http_response_code($status_code);
		require(base_path("controllers/{$status_code}.php"));
		die();
	}
	
}

// function routeToController($uri, $routes) {
// 	if( array_key_exists($uri, $routes) ) {
// 		require $routes[$uri];
// 	} else {
// 		abort();
// 	}
// }