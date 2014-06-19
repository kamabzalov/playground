<?php

$basket = [
	[
		'id' => 1,
		'amount' => 34,
		'price' => 12.23,
		'name' => 'Nike'
	],

	[
		'id' => 7,
		'amount' => 30,
		'price' => 21.23,
		'name' => 'Puma'
	],

	[
		'id' => 8,
		'amount' => 40,
		'price' => 12.3,
		'name' => 'Adidas'
	],

];

$idsAndPrices = [];

foreach ($basket as $item) {
	$idsAndPrices[$item['id']] = $item['price'];
}

var_dump($idsAndPrices);

$prices = array_map(function($item) {
	return $item['price'];
}, $basket);

var_dump($prices);

$prices = array_column($basket, 'price');

var_dump($prices);

$idsAndPrices = array_column($basket, 'price', 'id');
var_dump($idsAndPrices);