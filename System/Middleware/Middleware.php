<?php
/**
 * Middleware class responsible for handling HTTP requests and responses.
 *
 * This class can be used to intercept, modify, or validate incoming requests
 * before they reach the application logic, as well as to process outgoing responses.
 *
 * Typical use cases include authentication, logging, input validation, and response formatting.
 *
 * @package System\Middleware
 */

namespace System\Middleware;

use Exception;

class Middleware
{
    // Lookup table
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];

    public static function resolve($key) {

        if (! $key) {
            return;
        }

        // look in the MAP constant and look for
        // the $key (class path) i.e: 'guest' => Guest::class
        $middleware = static::MAP[$key] ?? false;

        if (! $middleware) {
            throw new Exception("There is no object associated with the '{$key}' key.");
        }

        // Instanciate $middleware then call the handle() method
        // on the MAP middlware class
		(new $middleware)->handle();
    }
}