<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

		$str = "Spain,Italy,France,USA";
		$arr = explode(",", $str);
		echo $arr[0];

		$str1 = implode(" ", $arr);
		echo $str1;

		if(in_array("USA", $arr)) {
			echo "India is here";
		}

		print_r(array_reverse($arr));
		echo "<br>";

		sort($arr, SORT_STRING);
		print_r($arr);
		echo "<br>";

		$count = range(0, 50);
		foreach ($count as $value) {
			echo $value, " ";
		}
		echo "<br>";

		echo count($count);

	?>	



</body>
</html>