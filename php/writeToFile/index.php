<?php

$file = 'text.txt';

$data = "111";

$fp = fopen($file, "a+");
fwrite($fp, $data);
fclose($fp);

