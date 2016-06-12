<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php

	if(isset($_POST['submit'])) {
		$data_missing = array();

		if(empty($_POST['first_name'])) {
			$data_missing[] = "First name";
		} else {
			$fName = trim($_POST['first_name']);
		}

		if(empty($_POST['last_name'])) {
			$data_missing[] = "Last name";
		} else {
			$lName = trim($_POST['last_name']);
		}

		if(empty($_POST['email'])) {
			$data_missing[] = "Email";
		} else {
			$email = trim($_POST['email']);
		}

	}


?>


</body>
</html>