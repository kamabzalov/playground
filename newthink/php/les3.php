<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post">
		
		<p>Напечтать числа от 1 до:
			<input type="text" name="number"/>
			<input type="submit" name="submit" value="Отправить"/>
		</p>

		<p>Накпечатать несколько чисел Фибоначчи:
			<input type="text" name="fib"/>
			<input type="submit" name="submit" value="Напечатать"/>
		</p>

	</form>


	<?php

		$num = (int) $_REQUEST['number'];

		$start = 1;

		while ($start <= $num) {
			if (($start % 2) != 0) {
				echo "$start <br>";
			} elseif ($start >= 1000) {
				break;
			} else {
				$start++;
				continue;
			}

			$start++;
		}

		echo "<br>";

		$a = 101;
		do {
			echo "$a". ", ";
			$a++;
		} while ($a <=100);

		echo "<br>";


		$fib = (int) $_REQUEST['fib'];

		$b = 0;
		$c = 1;
		for ($itarator=0; $itarator <= $fib ; $itarator++) { 
			echo "$b" . ", ";
			$sum = $b + $c;
			$b = $c;
			$c = $sum;

		}

	?>


</body>
</html>