<?php
/**
 * Array of routes to  *
 * Example: uri endpoint => controller path
 */

// return [
// 	'/' 		    => 'index.php',
// 	'/about' 	    => 'about.php',
// 	'/notes' 	    => 'notes/index.php',
// 	'/note' 	    => 'notes/show.php',
//     '/notes/create' => 'notes/create.php',
// 	'/contact' 	    => 'contact.php',
// ];

// use configs\Router;
// $router = new Router();

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php')->only('auth'); // applying auth Middleware from Router class
$router->get('/note', 'notes/show.php');
$router->delete('/note', 'notes/destroy.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');

$router->get('/note/edit', 'notes/edit.php');
$router->patch('/note', 'notes/update.php');

$router->get('/register', 'registration/create.php')->only('guest'); // applying guest Middleware from Router class
$router->post('/register', 'registration/store.php');

$router->get('/login', 'sessions/create.php')->only('guest');
$router->post('/sessions', 'sessions/store.php');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');