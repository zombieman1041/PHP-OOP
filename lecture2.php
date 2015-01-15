<?php
//example 1
class Ulises{
	public $firstName;
	public $lastName;
	public $breed;
	
	function __construct($firstName, $lastName, $breed) {
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->breed = $breed;
	}
	public function getName(){
		return "My first name is " . $this->firstName . " and my lastName is " . $this->lastName . 
		"my breed is " . $this->breed;
	}
}
	$me = new Ulises('ulises','gomez','latino');
	echo $me->getName();
