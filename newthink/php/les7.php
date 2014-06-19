<?php	

$arr = array("123", "12345", "Kamil", "p* 1 ", "Abzalov", "ok_kam90@mail.ru");

$match = preg_grep("%\w*\b\d\s%", $arr);

foreach($match as $res) {
	echo $res;
}