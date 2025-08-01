<?php

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// $heading_name = "403 Forbidden";

// Load the View
require view('403.view.php', [
    'heading_name' => '403 Forbidden"'
]);