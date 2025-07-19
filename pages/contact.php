<?php

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$heading_name = "Contact Us";

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
require('partials/views/contact.view.php');