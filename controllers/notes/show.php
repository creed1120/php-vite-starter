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

require('system/main.php');
// DATABASE CLASS LOADED IN THE "index.php" file
// require('system/Database.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');
// $heading_name = "Note";

$config = require('./config.php');

$db = new Database($config['database']);
// $query = "SELECT * FROM notes WHERE user_id = :id";
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [
        ':id' => $_GET['id']
    ])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId, Response::FORBIDDEN);

// Load the View
view('notes/show.view.php', [
    'heading_name' => 'Note',
    'note' => $note
]);