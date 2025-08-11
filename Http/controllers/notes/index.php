<?php
/**
 * Controller for the /notes route.
 *
 * This file handles the logic for the main entry point of the application.
 * Add route handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 *
 */

// use System\Database;
use System\App;

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$db = App::resolve('\System\Database');

$query = "SELECT * FROM notes WHERE user_id = 1";
$notes = $db->query($query)->getAll();

// Load the View
view('notes/index.view.php', [
    'heading_name' => 'My Notes',
    'notes' => $notes
]);