<?php

$str = "Mailman Mailwoamn Jenny Jen Doctor Doug Dog";

preg_match_all('%Je[nifery]{1,6}%', $str, $res);

foreach ($res as $value) {
	foreach ($value as $val) {
		echo $val;
		echo "<br>";
	}
}

$string = "Dick and Jane fetched a bucket of water";
echo preg_replace("%Dick%", "Paul", $string);
echo "<br>";

echo str_replace("Jane", "Kamil", $string);
echo "<br>";

echo substr($string, 9, 4);
echo "<br>";

echo strpos($string, "fetched");
echo "<br>";

$chair = "John Tompson (CEO) Kamil Abzalov (CFO) Marat Abzalov (CTO)";
$title = preg_split("%\s\(.{3}\)\s%", $chair);

foreach ($title as $value) {
	echo $value;
}

echo strlen($chair);
echo "<br>";

$strOne = "Jay";
$strTwo = "Jay";
$strThree = "job";

echo strcmp($strOne, $strTwo);
echo "<br>";

echo ucfirst($strThree);
echo "<br>";

$st = "<body>My page<body>";
echo trim($st);
