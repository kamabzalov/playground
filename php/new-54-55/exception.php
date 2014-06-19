<?php

class Service
{
	private $connection;

	public function __construct()
	{
	
	}

	public function getData(){
		//throw new Exception("Error Processing Request");
		echo "get data";
	}

	public function close() {
		echo " connection";
	}
}

$service = new Service();
try {
	$service->getData();
	/*throw new Exception("Error Processing Request");
	echo "string111";*/
} catch (\Exception $e) {
//	echo "string" . PHP_EOL;
	var_dump($e);
} finally {
	$service->close();
}


