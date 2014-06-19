<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

		function factiroal($number) {
			if($number == 1) {
				return 1;
			} else {
				return $number * factiroal($number-1);
			}

		}

		echo factiroal(3);

	?>


</body>
</html>