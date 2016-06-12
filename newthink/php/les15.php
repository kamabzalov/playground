<?php

date_default_timezone_set('UTC');

echo date('h:i:s a, l F jS Y e');

$bestFriends = array('Joy', 'Willow', 'Ivy');

echo 'My wife ' . $bestFriends[0];

$bestFriends[4] = "Steeve <br/>";

foreach($bestFriends as $friend) {
	echo $friend;
}

$customer = array(
		//'Name'   => $userName,
		//'Street' => $street
	);


$customers = array(array('Derek', '123 Main', '15212'),
				  array('Derek', '123 Main', '15212'),	
				  array('Derek', '123 Main', '15212'));

//print_r($customers);

for($row =0; $row<3; $row++) {
	for($col=0; $col<3; $col++) {
		echo $customers[$row][$col] . " ";
	}
}

echo "<br>";
echo "<br>";
echo "<br>";

$randStr = "             String        ";

echo strlen("$randStr"). "<br>";
echo strlen(trim("$randStr")). "<br>";


echo "The randString is $randStr";

echo "<br>";
echo "<br>";

printf("The randomString is %s <br/>", $randStr);


$decimal = 2.3456;

echo "<br>";
echo "<br>";

printf("decimal num  = %.2f <br>", $decimal);

echo "<br>";
echo "<br>";


echo strtoupper($randStr). "<br>";
echo strtolower($randStr). "<br>";
echo ucfirst($randStr). "<br>";

$arrayForString = explode(' ', $randStr, 2);

$stringToArray = implode(' ', $arrayForString);

$str = "Kamil Abzalov";

$part = substr("Kamil", 0, 6);
echo $part;

$man = "Man";
$manHole = "Manhole";

echo strcmp($man, $manHole);
echo strcasecmp($man, $manHole);

echo "The string " . strstr($str, "Kamil");
echo "The string " . stristr($str, "Kamil");

echo "The string " . strpos($str, "il");

$newString = str_replace("Abzalov", "Stuff", $str);
echo $newString;

function addNumbers($num1, $num2) {
	return $num1 + $num2;
}

echo "3 + 4 = " . addNumbers(3,4);