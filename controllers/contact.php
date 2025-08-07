<?php
/**
 * Controller for the /contact route.
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

$contactPageArray = [
	[
		'pagename' => 'Contact Us Page',
		'heading' => 'Contact us with any issues'
	],
	[
		'pagename' => 'Contact Second array',
		'heading' => 'Second heading content'
	]
];

// Load the View
view('contact.view.php', [
	'heading_name' => 'Contact Us',
	'contactPageArray' => $contactPageArray
]);