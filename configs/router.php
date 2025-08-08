<?php
/**
 * Router class
 * 
 * Route the request to the appropriate controller based on the URI.
 *
 * @param string $uri The request URI.
 * @param array $routes The defined routes.
 */

namespace configs;

use System\Middleware\Middleware;

class Router {

	protected $routes = [];

	protected function add($method, $uri, $controller)
    {
		// $this->routes[] = compact('method', 'uri', 'controller');

		/**
		 * The above add() function is a shorter version of this code which
		 * compoact() function
		 * 
		 * adding Middleware to the routes array
		 */
		$this->routes[] = [
			'uri' 		 => $uri,
			'controller' => $controller,
			'method' 	 => $method,
			'middleware' => null
		];

		/**
		 * return the current Router() object to allow chaining to the routes
		 * also need to return what is being returned from the add() method the
		 * all HTTP methods below.
		 */ 
		return $this;
    }

	public function get($uri, $controller) {
		return $this->add('GET', $uri, $controller);
	}

	public function post($uri, $controller) {
		return $this->add('POST', $uri, $controller);
	}

	public function delete($uri, $controller) {
		return $this->add('DELETE', $uri, $controller);
	}

	public function update($uri, $controller) {
		return $this->add('UPDATE', $uri, $controller);
	}

	public function patch($uri, $controller) {
		return $this->add('PATCH', $uri, $controller);
	}

	public function put($uri, $controller) {
		return $this->add('PUT', $uri, $controller);
	}

	/**
	 * Middleware
	 * 
	 * A bridge that takes us from an initial request 
	 * to the core of the Application.
	 *
	 * [Route Chaining Functions]
	 * 
	 * @param mixed $key
	 */
	public function only($key) {
		$this->routes[array_key_last($this->routes)]['middleware'] = $key;

		return $this;
	}

	/**
	 * Routes uri given to the corresponding controller
	 * and implements the Middleware
	 */
	public function route($uri, $method) {

		foreach($this->routes as $route) {
			if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

				Middleware::resolve($route['middleware']);

				/**
				 * handlers for the Middleware
				 * (stored within their own file):
				 * System/Middleware/Guest
				 * System/Middleware/Auth
				 * 
				 */
				// if ($route['middleware'] === 'guest') {
				// 	// if we have a Guest() class call the handle mehtod
				// 	(new Guest)->handle();
				// }

				// if ($route['middleware'] === 'auth') {
				// 	// if we have a Auth() class call the handle mehtod
				// 	(new Auth)->handle();
				// }

				return require base_path($route['controller']);
			}
		}

		$this->abort();
	}

	/**
	 * aborts to the error page i.e page not found
	 *
	 * @param int $status_code
	 */
	public function abort($status_code = 404) {
		http_response_code($status_code);
		require(base_path("controllers/{$status_code}.php"));
		die();
	}
	
}