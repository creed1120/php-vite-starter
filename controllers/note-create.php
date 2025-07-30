<?php
/**
 * Controller for the /notes/create route.
 *
 * This file handles the logic for creating a new note.
 * Add form handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 */

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');
$heading_name = "Create Note";

// if($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Handle form submission
//     var_dd($_POST);
// }

// Load the View
require('views/note-create.view.php');