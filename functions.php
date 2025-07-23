<?php
/**
 * Function to render var_dump variables with Pre tags
 *
 * @param [string] $value
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