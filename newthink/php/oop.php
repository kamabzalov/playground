<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php

class Animal implements Singable{

	protected $name;
	protected $favorite_food;
	protected $sound;
	protected $id;

	public static $number_of_animals = 0;

	const PI = "3.14";

	public function getName() {
		return $this->name;
	}

	public function __construct() {
		$this->id = rand(100,1000);
		echo $this->id. " has been assigned";
		Animal::$number_of_animals++;
	}

	public function __destruct()
	{
		echo $this->name . " is being destroy";
	}

	public function __get($name) {
		echo "Asked for ". $name . "<br>";
		return $this->$name;
	}

	public function __set($name, $value) {
		
		switch ($name) {
			case 'name':
				$this->name = $value;
				break;

			case 'sound':
				$this->sound = $value;
				break;
			
			default:
				echo $name . " Not found";
				break;
		}

		echo " Set " . $name . " to " .$value . "<br>";

	}

	public function run() {
		echo $this->name . "runs <br>";
	}


	final function whatIsGood() {
		echo "Running is good";
	}

	public function __toString() {
		return $this->name . " says " . $this->sound;
	}

	public function sing() {
		echo $this->name . " sings Bowww woow";
	}

	static function addThese($num1, $num2) {
		return ($num1 + $num2);
	}

}


class Dog extends Animal implements Singable {

	public function run() {
		echo $this->name . " runs like crazy <br>";
	}

	public function sing() {
		echo $this->name . " sings Grrr";
	}

}

interface Singable {
	public function sing();
}


$animalOne = new Animal();

$animalOne->name = "Spot";
$animalOne->sound = "Ruff";

echo $animalOne->name . " says " . $animalOne->sound;

echo "Total animals = " . Animal::$number_of_animals;

echo Animal::PI;


$animalTwo = new Dog();

$animalTwo->name = "Блиня";
$animalTwo->sound = "Ррррр";

echo $animalTwo->name . " says " . $animalTwo->sound;

echo "Total animals = " . Animal::$number_of_animals;


$animalOne->run();
$animalTwo->run();

echo "<br>";
echo "<br>";


$animalOne->whatIsGood();
$animalTwo->whatIsGood();



echo "<br>";
echo "<br>";

echo $animalOne->sing();

echo "<br>";
echo "<br>";


function makeThemSing(Singable $singAnimal) {
	$singAnimal->sing();
}

makeThemSing($animalOne);
makeThemSing($animalOne);

echo "<br>";
echo "<br>";

function singAnimal(Animal $singAnimal) {
	$singAnimal->sing();
}

singAnimal($animalOne);
singAnimal($animalTwo);

echo " 3 + 2 = " . Animal::addThese(3,5);

$isItAnAnimal = ($animalTwo instanceof Animal) ? "True" : "False";

echo "<br> ";

echo $isItAnAnimal;

$animalClone = clone $animalOne;

abstract class RandomClass {

	abstract function RandmFunction($attr) {

	}

}




?>


</body>
</html>