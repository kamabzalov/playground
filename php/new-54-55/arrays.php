<?php

class Some {
	public function getArray(){
	return [
		'key'     => 'value',
		'another' => 'another_value',
		'numbers' => array(1,2,3)
	];
}
}

$o = new Some;

var_dump($o->getArray()['numbers'][2]);

$o = (object)[
		'key' => 'javascript'
	];