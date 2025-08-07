<?php
/**
 * Controller for registration to load the the create view
 *
 * @package    php-vite-starter
 * @author     Cedric
 * @license    MIT
 */

require('System/main.php');

// Initialize the HTML layout with a title and language
// This will be used to render the HTML structure of the page
// The title will be displayed in the browser tab and the language is set to English
$layoutTemplate = new HTML('Modern PHP + Vite sethp');

// if($_SESSION['user'] ?? false) {
//     header('Location: /');
//     exit();
// }

view('registration/create.view.php', [
    'errors' => []
]);