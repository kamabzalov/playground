<?php

$password = 'Irssoeasy';
$start = microtime(true);
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 7]);

var_dump(password_get_info($hash));
echo PHP_EOL;
