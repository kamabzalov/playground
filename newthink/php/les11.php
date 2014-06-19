<?php

$num1 = 1;
$num2 = 2;

class ErrorWrangler extends Exception {

	function errorReport()
	{
		$err = "Error" . $this->getMessage(). " " . $this->getLine();
	}
}

try {
	if($num2 == 0) {
		throw new Exception("Error Processing Request", 1);
	}
	elseif ($num2 == 1) {
		throw new Exception("Error Processing Request!!!!", 1);
	}
	echo "Success";
} catch (ErrorWrangler $e) {
	echo $e->errorReport();
	error_log($e->errorReport, 3, "err.txt");
	die("Конец");
}

catch (Exception $e){
	echo $e->getMessage();
}