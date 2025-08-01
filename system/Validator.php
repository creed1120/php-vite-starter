<?php

namespace system;

class Validator {
    /**
     * Check if a string is within the specified length range.
     *
     * @param string $value The string to check.
     * @param int $minLength The minimum length of the string.
     * @param int $maxLength The maximum length of the string.
     * @return bool True if the string is within the range, false otherwise.
     */

    // Pure function can use static methods
    // or instance methods, but static is more common and easier to use
    // and we can use the Validator class as a static class with the :: operator
    public static function chkString($value, $minLength = 1, $maxLength = INF) {
        
        // strips whitespace from the beginning and end of the string
        $value = trim($value);

        // Check if the string length is within the specified range
        return strlen($value) >= $minLength && strlen($value) <= $maxLength;
    }

    /**
     * Checks if is a valid email
     *
     * @param string $value
     * @return bool
     */
    public static function validateEmail($value) {

        $validatedEmail = filter_var($value, FILTER_VALIDATE_EMAIL);

        return $validatedEmail;
    }
}