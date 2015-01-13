<?php
	class Human
	{
		public $firstname;
		public $lastname;
		public $gender;
		public $weight;
		public $hey;
		public $hi;

		function __construct($firstname, $lastname, $gender, $weight, $hey, $hi)
		{
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
			$this->weight = $weight;
			$this->hey = $hey;
			$this->hi = $hi;			
		}

		function getName()
		{
			return "I'm " . $this->firstname . " and my lastname is " . $this->lastname . 
			" my gender is " . $this->gender . " my weight is " . $this->weight;
		}		
  	}
  	class guy extends Human{
  		function greet(){
  			return $this->hi;
  		}
  	}
  	class girl extends Human{
  		function hello(){
  			return $this->hey;
  		}
  	}
		$Guy = new Human("Blake","Dayman","male",15,"hey","hi");
		echo $Guy->getName(); 

	

?>