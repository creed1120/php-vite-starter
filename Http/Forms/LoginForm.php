<?php

/**
 * Class LoginForm
 *
 * Handles user login form data and validation.
 */

namespace Http\Forms;

use System\Validator;

class LoginForm
{

    protected $errors = [];
    
    public function validate($email, $password)
    {
        if(! Validator::email($email)) {
            $this->errors['email'] = 'Please Enter a valid email address.';
        }
        if(! Validator::chkString($password, 1, 5)) {
            $this->errors['password'] = 'Please provide a password with at least 10 characters.';
        }

        return empty($this->errors());
    }

    public function errors() {
        return $this->errors;
    }
}