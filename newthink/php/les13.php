<?php

DEFINE ('DBUSER', 'root'); 
DEFINE ('DBPW', '29061990');
DEFINE ('DBHOST', 'localhost');
DEFINE ('DBNAME', 'world');

if ($dbc = mysql_connect(DBHOST, DBUSER, DBPW)) {
	if (!mysql_select_db(DBNAME)) {
		trigger_error("Не могу выбрать БД");
		exit();
	}
} else {
	trigger_error("Нет содинения с базой данных");
	exit();
}

function escapeData($data)
{
	if (function_exists('mysql_real_escape_string')) {
		global $dbc;
		$data = mysql_real_escape_string(trim($data), $dbc);
		$data - strip_tags($data);
	} else {
		$data = mysql_escape_string(trim($data));
		$data = strip_tags($data);
	}
	return $data;
}
