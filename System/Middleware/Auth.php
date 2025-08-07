<?php

namespace System\Middleware;

class Auth
{
    public function handle()
    {
        // Example: Check if user is authenticated
        if (! $_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }

        // Proceed to next middleware or controller
        // return $next($request);
    }
}