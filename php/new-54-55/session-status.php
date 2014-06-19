<?php

function state()
{
	$status = session_status();

	switch ($status) {
		case PHP_SESSION_DISABLED:
			echo 'disabled';
			break;
		case PHP_SESSION_NONE:
			echo "no active";
			break;
		case PHP_SESSION_ACTIVE:
			echo "active";
			break;
	}
}

session_start();
state();

session_write_close();

state();