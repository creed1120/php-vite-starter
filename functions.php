<?php
// Helper functions for the application

/**
 * Function to render var_dump variables with Pre tags
 *
 * @param mixed $value The variable to dump
 * @return void
 */
function var_dd($value) {
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
	die();
}

/**
 * checks for current page
 *
 * @param [string] $url
 * @return boolean
 */
function isCurrentPage($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

/**
 * Checks if the current user is authorized to perform an action.
 *
 * @return bool
 */
function authorize($condition, $status = Response::FORBIDDEN) {
	if( !$condition ) {
		abort($status);
	}
}