<?php
/**********************************************************************
 * Controller for /note/edit
 *
 * @package php-vite-starter
 * @author Cedric Reed
 **********************************************************************/

use System\App;
use System\Response;

require('System/main.php');

// Initialize the HTML layout with a title and language
// This will be used to render the HTML structure of the page
// The title will be displayed in the browser tab and the language is set to English
$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$db = App::resolve('\System\Database');

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId, Response::FORBIDDEN);

// Load the View
view('notes/edit.view.php', [
    'heading_name' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);