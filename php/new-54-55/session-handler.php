<?php

class MySessionHandler implements SessionHandlerInterface
{

}
$ses = new MySessionHandler();

session_set_save_handler($ses);