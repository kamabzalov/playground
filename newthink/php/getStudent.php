<?php

require_once('les16.php');

$query = "SELECT first_name, last_name, email FROM student";

$resp = @mysqli_query($dbc, $query);

if($resp) {
	echo "<table>";
	
	while ($row = mysqli_fetch_array($resp)) {
		echo '<tr>' . $row['first_name'] .'</tr>';
		echo '<tr>' . $row['last_name'] .'</tr>';
		echo '<tr>' . $row['email'] .'</tr>';
	}

	echo "</table>";
} else {
	echo "Not data";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);