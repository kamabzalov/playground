<?php

/*$ar = ['radek', 'Bankel'];

list($firstName, $lastName) = $ar;

/*$firstName = $ar[0];
$lastName = $ar[1]; */

//echo $firstName, " ", $lastName;

$authors = [
	["Radek Benkel", "PHP 5.5"],
	["Jeffrey Way", "Laravel"],
	["Jreny MacPeak", "JS"]
];

/*foreach($autors as $course) {
	$author = $course[0];
	$title = $course[1];
	echo "$author has made $title course" . PHP_EOL;
}*/

/*foreach($authors as $course) {
	list($author, $title) = $course;
	$title = $course[1];
	echo "$author has made $title course" . PHP_EOL;
}*/

foreach($authors as list($author, $title)) {
	echo "$author has made $title course" . PHP_EOL;
}