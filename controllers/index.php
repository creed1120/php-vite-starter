<?php
/**
 * Controller for the /index route.
 *
 * This file handles the logic for the main entry point of the application.
 * Add route handling, data processing, or view rendering as needed.
 *
 * @package php-vite-starter
 * @author Cedric Reed
 *
 */

use System\Database;

require('System/main.php');
// MYSQL db connection
// require('system/database.php');

$layoutTemplate = new HTML('Modern PHP + Vite setup');
// Dashboard heading
// $heading_name = "Main Dashboard";

// store the data that is returned from the "config.php" file in the $config variable
$config = require('./config.php');
// Instantiate the a new instance of the Database class
$db = new Database($config['database']);


// Store the results in the "$posts" variable
// we need to bind the "$params" from the url query string with a "?"
// and add them as the 2nd argument in the "query()" method i.e [$id]
// example: http://localhost:3001?id=1

// $id = $_GET['id'];

// 2 ways to bind params (? or :)
$query = "SELECT * FROM posts";
// $query = "SELECT * FROM posts WHERE id = ?";
// $query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query)->getAll();
// $posts = $db->query($query, [$id])->fetchAll();
// $post = $db->query($query, [':id' => $id])->fetch();


// $books = [
// 	[
// 		'title' => 'Clean Code',
// 		'author' => 'Robert C. Martin',
// 		'url' => 'https://www.goodreads.com/book/show/3735293-clean-code',
// 		'releaseyear' => '2003'
// 	],
// 	[
// 		'title' => 'The Pragmatic Programmer',
// 		'author' => 'Andrew Hunt',
// 		'url' => 'https://www.goodreads.com/book/show/4099.The_Pragmatic_Programmer',
// 		'releaseyear' => '1995'
// 	],
// 	[
// 		'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
// 		'author' => 'Erich Gamma',
// 		'url' => 'https://www.goodreads.com/book/show/85009.Design_Patterns',
// 		'releaseyear' => '1987'
// 	]
// ];

/*******************************************************************
 * Filter by author without using the PHP "array_filter" function
 *******************************************************************/
// function filterBooksByAuthor($books, $author) {
// 	$filteredBooks = [];
// 	foreach( $books as $book ) {
// 		if ( $book['author'] === $author ) {
// 			$filteredBooks[] = $book;
// 		}
// 	}
// 	return $filteredBooks;
// }

/*******************************************************************
 * Filter using built in PHP "array_filter" function
 *******************************************************************/
// $filteredBooks = array_filter($books, function($book) {
//     return $book['author'] === 'Andrew Hunt';
// });

// Load the View
view('index.view.php', [
    'heading_name' => 'Main Dashboard',
    'posts' => $posts
]);