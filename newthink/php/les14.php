<?php

/*setcookie('cookievar', 0, time()-(60*60*24*7));


if(isset($_COOKIE['cookievar'])) {
	$randcookie = $_COOKIE['cookievar'];
	echo $randcookie;
} else {
	echo "No cookie";
}
*/

/*session_start();

$_SESSION['first_name'] = 'Derek';

echo "Hello ". $_SESSION['first_name'];
*/

echo "Server address". $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server name". $_SERVER['SERVER_NAME'] . "<br>";
echo "Server name". $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Server name". $_SERVER['HTTP_HOST'] . "<br>";
echo "Server name". $_SERVER['REMOTE_ADDR'] . "<br>";
