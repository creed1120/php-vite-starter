<?php
/**********************************************************************
 * Controller for the /notes/create route.
 *
 * This file handles the logic for creating a new note.
 * Add form handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 **********************************************************************/

require('system/main.php');

// Initialize the HTML layout with a title and language
// This will be used to render the HTML structure of the page
// The title will be displayed in the browser tab and the language is set to English
$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// Set the heading name for the page
// This will be used in the view to display the title of the page
// It can be used for SEO purposes or to provide context to the user
// $heading_name = "Create Note";

// Include the Validator class for form validation
$validate = require 'system/Validator.php';

// store the data that is returned from the "config.php" file in the $config variable
$config = require('./config.php');

// Instantiate the a new instance of the Database class
$db = new Database($config['database']);

/***********************************************************************
 * Handle the form submission for creating a note.
 * Validate the input and insert the note into the database.
 ***********************************************************************/

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Initialize an empty array to store validation errors
    // This will be used to store any errors that occur during validation
    $errors = [];

    // Validate the note body input
    // Check if the note body is provided and meets the length requirements
    // If the validation fails, add an error message to the $errors array
    if(! Validator::chkString($_POST['note-body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 10 characters is required';
    }

    // If there are no validation errors, proceed to insert the note into the database
    // If there are errors, they will be displayed in the view
    if(empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['note-body'] ?? '',
            'user_id' => 1
        ]);

        // Redirect to the notes list or show a success message
        header('Location: /notes');
        exit();
    }
}

// Load the View
view('notes/create.view.php', [
    'heading_name' => 'Create Note',
    'errors' => $errors
]);