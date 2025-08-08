<?php
/**********************************************************************
 * Controller to display the store form to presist a note to db
 *
 * @package php-vite-starter
 * @author Cedric Reed
 **********************************************************************/

require('System/main.php');

// Initialize the HTML layout with a title and language
// This will be used to render the HTML structure of the page
// The title will be displayed in the browser tab and the language is set to English
$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// Load the View
view('notes/create.view.php', [
    'heading_name' => 'Create Note',
    'errors' => []
]);