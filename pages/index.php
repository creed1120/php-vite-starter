<?php

require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$heading_name = "Main Dashboard";

// custom PHP code
$books = [
	[
		'title' => 'Clean Code',
		'author' => 'Robert C. Martin',
		'url' => 'https://www.goodreads.com/book/show/3735293-clean-code',
		'releaseyear' => '2003'
	],
	[
		'title' => 'The Pragmatic Programmer',
		'author' => 'Andrew Hunt',
		'url' => 'https://www.goodreads.com/book/show/4099.The_Pragmatic_Programmer',
		'releaseyear' => '1995'
	],
	[
		'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
		'author' => 'Erich Gamma',
		'url' => 'https://www.goodreads.com/book/show/85009.Design_Patterns',
		'releaseyear' => '1987'
	]
];

// Filter by author without using the PHP "array_filter" function
// function filterBooksByAuthor($books, $author) {
// 	$filteredBooks = [];
// 	foreach( $books as $book ) {
// 		if ( $book['author'] === $author ) {
// 			$filteredBooks[] = $book;
// 		}
// 	}
// 	return $filteredBooks;
// }

// Filter using built in PHP "array_filter" function
$filteredBooks = array_filter($books, function($book) {
    return $book['author'] === 'Andrew Hunt';
});

// Load the View
require('partials/views/index.view.php');