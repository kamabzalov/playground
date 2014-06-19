<?php

/*var_dump(intval(1));
var_dump(floatval(1));
var_dump(strval(1));
var_dump(boolval(1));


var_dump((int)(1));
var_dump((float)(1));
var_dump((string)(1));
var_dump((bool)(1));*/

$input = [0, 2, 'string', new stdClass(), 'false'];

/*$serialized = array_map(function($item){
	return (bool)$item;
}, $input);*/

$serialized = array_map("boolval", $input);



var_dump($serialized);