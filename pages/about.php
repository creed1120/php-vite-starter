<?php

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
require('partials/views/about.view.php');