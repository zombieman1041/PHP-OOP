<?php
	class Human
	{
		public $firstname;
		public $lastname;
		public $gender;
		public $weight;

		function __construct($firstname, $lastname, $gender, $weight)
		{
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
			$this->weight = $weight;			
		}

		function getName()
		{
			return "I'm " . $this->firstname . "<br />" .
			 " and my lastname is " . $this->lastname . "<br />" .
			" my gender is " . $this->gender . "<br />" .
			 " my weight is " . $this->weight;
		}		
  	}
  	class guy extends Human
  	{
  		function __construct($firstname, $lastname, $gender, $weight, $hi)
  		{
  			parent::__construct($firstname, $lastname, $gender, $weight);
  		$this->hi = $hi;
  		}
  		function greet()
  		{
  			return $this->hi;
  		}
  	}
  	
  	class girl extends Human
  	{
  		function __construct($firstname, $lastname, $gender, $weight, $hey)
  		{
  			parent::__construct($firstname, $lastname, $gender, $weight);
  			$this->hey=$hey;
  		}
  		function hello()
  		{
  			return $this->hey;
  		}
  	}
  	
		$Nancy = new girl("Blake","Dayman","male",15,"hey");
		echo $Nancy->hello() . "<br />" . "<br />";

		$Guy1 = new guy("Blake","Dayman","male",15,"hi");
		echo $Guy1->greet(); 
?>