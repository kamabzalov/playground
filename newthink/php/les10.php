<?php

class Animal {

	private $name;
	private $food = "meat";

	public static $num = 0;

	public function __construct($name="no name") {
		echo "__construct was called";
		$this->setName($name);
		self::$num++;
	}

	public function __destruct() {
		echo "__destruct was called";
		echo "<br>";
	}

	final public function getName() {
		return $this->name;
	}

	final public function setName($newName) {
		$this->name = $newName;
	}

	public function makeNoise() {
		echo "Rrr";
		echo "<br>";
	}

	public function favFood() {
		echo "My favorite food" . $this->food;
		echo "<br>";
	}

	public function move() {
		echo "Walk alone";
		echo "<br>";
	}
}

class Dog extends Animal {

	public function __construct($name="no name") {
		parent::__construct($name);
	}

	public function __destruct() {
		echo "__destruct was called";
		echo "<br>";
	}

	public function makeNoise() {
		Animal::makeNoise();
		echo "Bark";
		echo "<br>";
	}

}

$grover = new Dog("Grover");
$paul = new Dog("Paul");

$grover->makeNoise();

$grover->favFood();
$grover->move();
	echo Animal::$num . "<br>";