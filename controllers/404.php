<?php

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// Load the View
view('404.view.php', [
    'heading_name' => '404 Error'
]);