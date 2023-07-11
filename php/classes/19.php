<?php

class Person
{
	private $name;
	private $lastname;
	private $age;
	private $mother;
	private $father;

	function __construct($name, $lastname, $age, $mother, $father)
	{
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->mother = $mother;
		$this->father = $father;
	}
	function getName()
	{
		return $this->name;
	}
	function getLastname()
	{
		return $this->lastname;
	}
	function getAge()
	{
		return $this->age;
	}
	function getMother()
	{
		return $this->mother;
	}
	function getFather()
	{
		return $this->father;
	}
	function getInfo()
	{
		return "<h3>My family tree </h3><br>" . ";" .
			"My name is: " . $this->getName() . ";" .
			"<br>My lastname is: " . $this->getLastname() . ";" .
			//"<br>My age is: " . $this->getAge() . ";" .
			"<br> My father's name is: " . $this->getFather()->getName() . ";" .
			"<br> My mother's name is: " . $this->getMother()->getName() . ";" .
			"<br> My mother's mother name is: " . $this->getMother()->getMother()->getName() . ";" .
			"<br> My mother's father name is: " . $this->getMother()->getFather()->getName() . ";" .
			"<br> My father's mother name is: " . $this->getFather()->getMother()->getName() . ";" .
			"<br> My father's father name is: " . $this->getFather()->getFather()->getName() . ".";
	}
}
$yuriy = new Person("Yuriy", "Kuleshov", 61, null, null);
$maria = new Person("Maria", "Kuleshova", 58, null, null);

$alexander = new Person("Alexander", "Bulychev", 64, null, null);
$olga = new Person("Olga", "Bulycheva", 64, null, null);

$ivan = new Person("Ivan", "Bulychev", 42, $olga, $alexander);
$svetlana = new Person("Svetlana", "Bulycheva", 36, $maria, $yuriy);
$marianna = new Person("Marianna", "Bulycheva", 10, $svetlana, $ivan);

echo $marianna->getInfo();
