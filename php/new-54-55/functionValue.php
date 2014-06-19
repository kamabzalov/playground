<?php

function returnSomeData($size = 0) {
	return $size === 0 ? [] : range(0, $size);
}

var_dump(empty(returnSomeData(6)));