<?php

interface SomeInterface 
{
	public function sayFoo();
}

trait Foo
{

	public function sayFoo()
	{
		return 'Hello, trait';
	}
}

trait Bar
{

	public function sayFoos()
	{
		return 'Hello, traits';
	}
}


class Some implements SomeInterface
{
	use Foo, Bar;

	private $property = "Hello";

	public function getProperty()
	{
		return $this->property;
	}

}

$foo = new Some;

var_dump($foo instanceof SomeInterface);