<?php


echo 'Starting<br>';

sleep(1);

echo 'Ended' .(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);

