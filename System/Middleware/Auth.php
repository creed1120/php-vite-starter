<?php
/**
 * Auth Middleware
 * 
 * handler for the Middleware (stored within their own file)
 * 
 * provides a handle() method to determine & evaluate 
 * wether the request can continue to the core of the application.
 * 
 */

namespace System\Middleware;

class Auth
{
    public function handle()
    {
        // Check if user is authenticated
        if (! $_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }

        // Proceed to next middleware or controller
        // return $next($request);
    }
}