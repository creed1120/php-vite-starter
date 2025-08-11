<?php
/**
 * Controller for logging user out of Session
 *
 * @package php-vite-starter
 * @author Cedric Reed
 *
 */

// log user out
logout();

header('Location: /');
exit();