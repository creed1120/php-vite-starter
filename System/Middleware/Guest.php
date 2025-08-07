<?php

namespace System\Middleware;

class Guest
{
    public function handle()
    {
        // Example: Check if user is authenticated
        if ($_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }

        // Proceed to next middleware or controller
        // return $next($request);
    }
}