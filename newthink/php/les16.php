<?php

define('DB_USER', 'root');
define('DB_PASSWORD', '29061990');
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Connect error' . mysqli_connect_error());