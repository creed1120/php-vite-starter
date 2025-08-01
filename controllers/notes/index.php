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

use system\Database;

require('system/main.php');
// DATABASE CLASS LOADED IN THE "index.php" file
// require('system/Database.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');
// $heading_name = "My Notes";

$config = require('./config.php');

$db = new Database($config['database']);
$query = "SELECT * FROM notes WHERE user_id = 1";
$notes = $db->query($query)->getAll();

// Load the View
view('notes/index.view.php', [
    'heading_name' => 'My Notes',
    'notes' => $notes
]);