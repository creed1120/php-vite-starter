<?php

/**
 * Class LoginForm
 *
 * Handles user login form data and validation.
 */

namespace System;

use System\App;

class Authenticator {

    public function attempt($email, $password) {
        // // check if account already exist
        $user = App::resolve('\System\Database')->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();

        if($user) {
            if (password_verify($password, $user['password'])) {
                
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }

        return false;
    }

    /**
     * Function to login authorized user
     *
     */
    public function login($user) {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    /**
     * Function to logout user
     *
     */
    public function logout() {
        // Clear out the $_SESSION super global
        $_SESSION = [];
        // remove all data from the Session
        session_destroy();
        // store the $_SESSION cookie parameters in $params variable
        $params = session_get_cookie_params();
        // set the cookie to be in the past to delete it
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

}