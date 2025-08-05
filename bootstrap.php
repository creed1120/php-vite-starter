<?php

use System\Container;
use System\Database;
use System\App;

$container = new Container();

// Bind the Database class to the Container Container class with 
// facotory function if you will
$container->bind('\System\Database', function() {
    $config = require('config.php');

    return new Database($config['database']);
});

// $db = $container->resolve('\System\Database');
App::setContainer($container);