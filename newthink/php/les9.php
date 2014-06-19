<?php

	class Animal {
		public $name;
		private $age;
		const POUNDID = 12345;

		public function setAge($sendAge)
		{
			$this->age = $sendAge;
		}

		public function getAge()
		{
			return $this->age;
		}
	} 

	$dog = new Animal();
	$dog->name = "Groover";
	$dogName = $dog->name;

	$dog->setAge(8);

	//$dog->age = 9;
	//echo $dog->age;

	echo $dogName . " " . $dog->getAge();

	echo "Pound" . $dog::POUNDID;