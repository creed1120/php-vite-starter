<?php

use System\Database;
use System\Validator;

require('System/main.php');

// Initialize the HTML layout with a title and language
// This will be used to render the HTML structure of the page
// The title will be displayed in the browser tab and the language is set to English
$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// store the data that is returned from the "config.php" file in the $config variable
$config = require('./config.php');
// Instantiate the a new instance of the Database class
$db = new Database($config['database']);

// Validate the note body input
// Check if the note body is provided and meets the length requirements
// If the validation fails, add an error message to the $errors array

$errors = [];

if(! Validator::chkString($_POST['note-body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if(!empty($errors)) {
    return view('notes/create.view.php', [
        'heading_name' => 'Create Note',
        'errors' => $errors,
    ]);
}

// If there are no validation errors, proceed to insert the note into the database
// If there are errors, they will be displayed in the view
if(empty($errors)) {
    $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
        'body' => $_POST['note-body'],
        'user_id' => 1,
    ]);

    // Redirect to the notes list or show a success message
    header('Location: /notes');
    exit();
}