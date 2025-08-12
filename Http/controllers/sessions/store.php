<?php

/**************************************
 * Sessions store controller
 * 
 **************************************/

use Http\forms\LoginForm;
use System\Authenticator;

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {

    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }

    $form->error('email', 'There was no matching account with that email address and password.');
}


/*********************************************************************
 * Refactored the $errors & login validation into a dedicated class
 * LoginForm() above.
 *********************************************************************/
// $errors = [];
// if(! Validator::email($email)) {
//     $errors['email'] = 'Please Enter a valid email address.';
// }
// if(! Validator::chkString($password)) {
//     $errors['password'] = 'Please provide a password with at least 10 characters.';
// }
// if(!empty($errors)) {
//     return view('sessions/create.view.php', [
//         'errors' => $errors,
//     ]);
// }

return redirect('/login');

// return view('sessions/create.view.php', [
//     'errors' => $form->errors()
// ]);

// return view('sessions/create.view.php', [
//     'errors' => [
//         'email' => 'There was no matching account with that email address and password.'
//     ]
// ]);





// Grab Database class from the App class Container property
// $db = App::resolve('\System\Database');

// // check if account already exist
// $user = $db->query('SELECT * FROM users WHERE email = :email', [
//     'email' => $email
// ])->find();

// if ($user) {
//     if (password_verify($password, $user['password'])) {
        
//         login([
//             'email' => $email
//         ]);

//         header('Location: /');
//         exit();
//     }
// }