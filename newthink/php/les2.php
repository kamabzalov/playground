<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post">
		
		<p>Name:
			<input type="text" name="name"/>
		</p>

		<p>Address:
			<input type="text" name="address"/>
		</p>

		<p>City:
			<input type="text" name="city"/>
		</p>

		<p>State:
			<input type="text" name="state"/>
		</p>

		<p>Guess a number 1 to 10:
			<input type="text" name="number"/>
		</p>

		<p>Cats, dogs or fish:
			<input type="text" name="animal"/>
		</p>

		<p>
			<input type="submit" name="submit" value="Send"/>
		</p>

	</form>

	<?php

		echo "I know ", $_POST['name']. "<br>"; 
		echo "You live in". " ". $_POST['address']. " " . $_POST['city'];


		$num = (int) $_POST['number'];

		if(($num == 5) AND ($num < 11)) {
			echo "Very good";
		} elseif ($num > 5) {
			echo "Too high";
		} else {
			echo "Too low";
		}

		$pet = $_POST['animal'];

		switch ($pet) {
			case 'dogs':
				echo "Dogs";
				break;
			case 'cats':
				echo "Cats";
				break;
			default:
				echo "Fish";
				break;
		}


	?>

</body>
</html>