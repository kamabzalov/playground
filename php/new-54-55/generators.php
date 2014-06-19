<?php

/*$lines - file("name.txt");

foreach ($lines as $line) {
	echo $line;
} */

funtion lines($fileName)
{
	/*$value = (yield "Some");
	echo $value;*/
	//yield "hello";
	//yield "envato";
	try {
		$value = yield;
	} catch (Exception $e){
		var_dump($e);
	}
}

//echo memory_get_usage();

$lines - lines();

echo $lines->throw new Exception("Error Processing Request", 1);


/*echo $lines->current();
$lines->send("envato");

/*
echo $lines->current();
echo $lines->next();

//$lines = lines("data.txt");

//echo memory_get_usage();

//var_dump($lines);

foreach ($$lines as $key => $line) {
	echo PHP_EOL . $key;
	echo $line;
}
