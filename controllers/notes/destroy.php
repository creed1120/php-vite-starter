<?php
/**
 * Controller for the single /note route.
 *
 * This file handles the logic for the main entry point of the application.
 * Add route handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 *
 */

use System\Database;
use System\Response;
use System\App;

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

/*******************************************************************
 * We have created a Container class to build up the
 * Instantiation of our database, so we don't have to Instantiate
 * multiple times throughout files
 *******************************************************************/
// $config = require('./config.php');
// $db = new Database($config['database']);

// Instantiating the Database class from the Container class
$db = App::resolve('\System\Database');

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId, Response::FORBIDDEN);

$db->query('DELETE FROM notes WHERE id = :id', [
    'id' => $_POST['id']
]);

header('Location: /notes');
exit();