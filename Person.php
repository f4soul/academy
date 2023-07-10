<?php
class Person
{
	private $name;
	private $lastname;
	private $age;
	private $hp;
	private $mother;
	private $father;
	private $grandmother1;
	private $grandmother2;
	private $grandfather1;
	private $grandfather2;

	function __construct($name, $lastname, $age, $mother, $father, $grandmother1, $grandfather1, $grandmother2, $grandfather2)
	{
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->mother = $mother;
		$this->father = $father;
		$this->grandmother1 = $grandmother1;
		$this->grandfather1 = $grandfather1;
		$this->grandmother2 = $grandmother2;
		$this->grandfather2 = $grandfather2;
		$this->hp = 100;
	}

	function sayHi($name)
	{
		return "Hi, $name, I'm " . $this->name;
	}

	function setHp($hp)
	{
		if ($this->hp + $hp >= 100) {
			$this->hp = 100;
		} else {
			$this->hp = $this->hp + $hp;
		}
	}

	function getHp()
	{
		return $this->hp;
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

	function getGrandmother1()
	{
		return $this->grandmother1;
	}

	function getGrandfather1()
	{
		return $this->grandfather1;
	}

	function getGrandmother2()
	{
		return $this->grandmother2;
	}

	function getGrandfather2()
	{
		return $this->grandfather2;
	}

	function getInfo()
	{
		return "<h3>Несколько слов о моих родственниках:</h3><br>" .
			"Моё имя: " . $this->getName() . ";" .
			"<br>Моя фамилия: " . $this->getLastname() . ";" .
			"<br>Моя мама: " . $this->getMother()->getName() . " " . $this->getMother()->getLastname() . ";" .
			"<br>Мой папа: " . $this->getFather()->getName() . " " . $this->getFather()->getLastname() . ";" .
			"<br>Моя бабушка по матери: " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastname() . ";" .
			"<br>Мой дедушка по матери: " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastname() . ";" .
			"<br>Моя бабушка по отцу: " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastname() . ";" .
			"<br>Мой дедушка по отцу: " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastname() . ".";
	}
}


$klaudia = new Person("Клавдия", "Харламова", 94, null, null, null, null, null, null);
$zinaida = new Person("Зинаида", "Филимонова", 91, null, null, null, null, null, null);
$anatoly = new Person("Анатолий", "Филимонов", 89, null, null, null, null, null, null);
$ivan = new Person("Иван", "Харламов", 87, null, null, null, null, null, null);
$evgeny = new Person("Евгений", "Филимонов", 59, $zinaida, $anatoly, null, null, null, null);
$irina = new Person("Ирина", "Филимонова", 59, $klaudia, $ivan, null, null, null, null);
$anton = new Person("Антон", "Филимонов", 30, $irina, $evgeny, $klaudia, $ivan, $zinaida, $anatoly);

echo $anton->getInfo();

// echo $valera->getMother()->getFather()->getName();

//Здоровье человека не может быть более 100 ед

// $medKit = 50;


// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit); //Нашел аптечку
// echo $alex->getHp() . "<br>";