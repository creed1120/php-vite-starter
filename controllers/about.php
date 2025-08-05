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

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

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
view('about.view.php', [
	'heading_name' => 'About Us',
	'aboutPageArray' => $aboutPageArray
]);