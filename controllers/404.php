<?php

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// $heading_name = "404 Error";

// Load the View
view('404.view.php', [
    'heading_name' => '404 Error'
]);