<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

		$arr = array("Name" => "Камиль", "Street" => "Грибоедоская");

		echo $arr["Name"]. "<br>" ;

		$info = array('Россия' => "Москва", "Словения" => "Любляна");

		$arr = array_merge($arr, $info);

		foreach ($arr as $key => $value) {
			echo $key, " ", $value, "<br>";
		}

		if (array_key_exists("Name1", $arr)) {
			echo "Есть такой элементв в массиве <br>";
		} else {
			echo "Ошибочка";
		}

		$search = array_search("Москва", $info);
		echo "$search <br>";

		print_r(array_keys($info));
		echo "<br>";

		print_r(array_values($arr));
		echo "<br>";

		$cust = array('Russia' => 'Moscow', 'England' => 'London');
		$cust1 = array('France' => 'Paris', 'Spain' => 'Madrid');

		$cust2 = array($cust, $cust1);

		print_r(array_values($cust2));
		echo "<br>";

		foreach ($cust2 as $key) {
			foreach ($key as $key2 => $value) {
				echo $key2, " ", $value, "<br>";
			}
		}
	?>


</body>
</html>