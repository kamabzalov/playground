<?php

class Original
{
	private $value = 5;

	public function getFunction()
	{
		return function(){
			return $this->value * 5;
		};
	}
}

class Bound 
{
	public $value = 10;
}

$a = new Original();
$b = new Bound();

$fun = $a->getFunction();
$newFun = Closure::bind($fun, $b, $b);

echo $fun() . PHP_EOL;
echo $newFun() . PHP_EOL;