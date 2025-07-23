<?php
/**
 * Controller for the /about route.
 *
 * This file handles the logic for the main entry point of the application.
 * Add route handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 *
 */

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$heading_name = "About Us";

$aboutPageArray = [
	[
		'pagename' => 'About Us Page',
		'heading' => 'What we are about'
	],
	[
		'pagename' => 'About Us Second array',
		'heading' => 'Second headgin content'
	]
];

// Load the View
require('views/about.view.php');