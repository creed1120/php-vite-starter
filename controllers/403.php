<?php

require('System/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// Load the View
view('403.view.php', [
    'heading_name' => '403 Forbidden'
]);