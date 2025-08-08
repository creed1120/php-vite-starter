<?php
/**************************************
 * Registration Controller
 * 
 **************************************/

use System\App;
use System\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

/**
 * Validate Form Inputs
*/

$errors = [];

if(! Validator::email($email)) {
    $errors['email'] = 'Please Enter a valid email address.';
}
if(! Validator::chkString($password, 7, 255)) {
    $errors['password'] = 'Please provide a password with at least 10 characters.';
}

if(!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

// Grab Database class from the App class Container property
$db = App::resolve('\System\Database');
// check if account already exist
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

// if YES, redirect to login page
if($user) {
    /**
     * TODO: Create a login page and redirect users there if registration is successful.
     * Example: header('Location: /login');
     */
    header('Location: /');
    exit();
    
} else {
    // if NOT, save one to the database and log the user in, and redirect.
    /**
     * TODO: Implement password hashing before storing in the database.
     * Currently, passwords are stored in plain text, which is insecure.
     * Use password_hash() for hashing and password_verify() for checking.
     */
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    // mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];

    /**
     * TODO: Create a User Dashboard page and redirect users there if registration is successful.
     * Example: header('Location: /dashboard');
     */
    header('Location: /');
    exit();
}