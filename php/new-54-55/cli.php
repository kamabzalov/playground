<?php

if(cli_set_process_title("php-memory-usage") === false){
	echo "Cannot set process";
	die(1);
}

echo "Running" . cli_get_process_title() . PHP_EOL;

while(true) {
	echo memory_get_usage() . PHP_EOL;
	sleep(1);
	cli_set_process_title("php-memory-usage" . time());
}

