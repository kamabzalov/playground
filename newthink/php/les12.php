<?php

DEFINE ('DBUSER', 'root');
DEFINE ('DBPW', '29061990');
DEFINE ('DBHOST', 'localhost');
DEFINE ('DBNAME', 'customer');

if($dbc = mysql_connect(DBHOST, DBUSER, DBPW)) {
	if(!mysql_select_db(DBNAME)) {
		trigger_error("error_msg connection");
		exit();
	}
} else {
	trigger_error("could not connext mysql");
	exit();
}

$file = fopen('file.csv', 'r');

while(($info = fgetcsv($file, 1000, ',')) != FALSE) {
	$getData = implode(",", $info);
	$query = "INSERT INTO manuf (man_id, name) VALUES (". $getData .")";
	echo $query;

	$res = mysql_query($query) or (trigger_error("MySQL error"));
}