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

// use System\Database;
use System\Response;
use System\App;

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$db = App::resolve('\System\Database');

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// Load the View
view('notes/show.view.php', [
    'heading_name' => 'Note',
    'note' => $note
]);