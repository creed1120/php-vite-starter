<?php

// use System\Database;
use System\Response;
use System\Validator;
use System\App;

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$db = App::resolve('\System\Database');

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if(! Validator::chkString($_POST['note-body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if(!empty($errors)) {
    return view('notes/edit.view.php', [
        'heading_name' => 'Update Note',
        'note' => $note,
        'errors' => $errors,
    ]);
}

// If there are no validation errors, proceed to insert the note into the database
// If there are errors, they will be displayed in the view
if(empty($errors)) {
    $db->query('UPDATE notes SET body = :body WHERE id = :id', [
        'body' => $_POST['note-body'],
        'id' => $_POST['id']
    ]);

    // Redirect to the notes list or show a success message
    header('Location: /notes');
    exit();
}