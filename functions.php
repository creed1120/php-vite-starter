<?php
// Helper functions for the application

use System\Response;

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
 * Function to render print_r variables with Pre tags
 *
 * @param mixed $value The variable to dump
 * @return void
 */
function var_print($value) {
	echo "<pre>";
	print_r($value);
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

function abort($status_code = 404) {
	http_response_code($status_code);
	require(base_path("controllers/{$status_code}.php"));
	die();
}

/**
 * Checks if the current user is authorized to perform an action.
 *
 * @return bool
 */
function authorize($condition, $status_code = Response::FORBIDDEN) {
	if( !$condition ) {
		abort($status_code);
	}
}

/**
 * Function to check if a file exists and require it
 *
 * @param string $path The path to the file
 * @return void
 */
function addPartials($partialPath) {
	$partialPath = $partialPath;

	return require_once($partialPath);
}

/**
 * Gets the project ROOT path and takes in a string path to file
 *
 * @param string $path
 * @return void
 */
function base_path($path) {
	return ROOT . $path;
}
/**
 * Function to render the page view
 *
 * @param string $path
 * @return string
 */
function view($path, $attributes = []) {

	extract($attributes);

	require base_path('views/' . $path);
}