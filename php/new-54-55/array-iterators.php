<?php

$real = new ArrayIterator(array('1'=>'one', '2'=>'two', '3'=>'three'));
$superHero = new ArrayIterator(array('Superman', 'Batman', 'Roben'));

$team = new MultipleIterator();
$team->attachIterator($real);
$team->attachIterator($superHero);

foreach ($team as $key => $item) {
	var_dump($key);
	var_dump($item);
	echo "========" . PHP_EOL;
}