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
  	
		$Girl = new girl("Blake","Dayman","male",15,"hey");
		echo $Girl->hello() . "<br />" . "<br />";

		$Guy1 = new guy("Blake","Dayman","male",15,"hi");
		echo $Guy1->greet(); 

	//example 2
	class Animal
	{
		public $firstname;
		public $lastname;
		public $gender;
		public $scientificName;
		public $weight;

		function __construct($firstname, $lastname, $gender, $scientificName , $weight)
		{
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
			$this->scientificName = $scientificName;			
			$this->weight = $weight;			
		}

		function getName()
		{
			return "I'm " . $this->firstname . "<br />" .
			 " and my lastname is " . $this->lastname . "<br />" .
			" my gender is " . $this->gender . "<br />" .
			" my scientificName is " . $this->scientificName . "<br />" .
			 " my weight is " . $this->weight;
		}		
  	}
  	class Lion extends Animal
  	{
  		function __construct($firstname, $lastname, $gender, $scientificName, $weight, $roar)
  		{
  			parent::__construct($firstname, $lastname, $gender, $scientificName, $weight);
  		$this->roar = $roar;
  		}
  		function greet()
  		{
  			return $this->roar;
  		}
  	}
  	
  	class Tiger extends Animal
  	{
  		function __construct($firstname, $lastname, $gender, $scientificName, $weight, $rawr)
  		{
  			parent::__construct($firstname, $lastname, $gender, $scientificName, $weight);
  			$this->rawr=$rawr;
  		}
  		function hello()
  		{
  			return $this->rawr;
  		}
  	}
  	
		$tiger1 = new Tiger("Blake","Dayman","male","bengaltiger",15,"rawr");
		echo $tiger1->hello() . "<br />" . "<br />";

		$lion1 = new Lion("Blake","Dayman","male", "africanlion",15,"roar");
		echo $lion1->greet(); 

	//example 3
	class Animals
	{
		public $firstname;
		public $lastname;
		public $gender;
		public $scientificName;
		public $weight;

		function __construct($firstname, $lastname, $gender, $scientificName , $weight)
		{
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
			$this->scientificName = $scientificName;			
			$this->weight = $weight;			
		}

		function getName()
		{
			return "I'm " . $this->firstname . "<br />" .
			 " and my lastname is " . $this->lastname . "<br />" .
			" my gender is " . $this->gender . "<br />" .
			" my scientificName is " . $this->scientificName . "<br />" .
			 " my weight is " . $this->weight;
		}		
  	}
  	class puppy extends Animals
  	{
  		function __construct($firstname, $lastname, $gender, $scientificName, $weight, $meow)
  		{
  			parent::__construct($firstname, $lastname, $gender, $scientificName, $weight);
  		$this->meow = $meow;
  		}
  		function greet()
  		{
  			return $this->meow;
  		}
  	}
  	
  	class kitten extends Animals
  	{
  		function __construct($firstname, $lastname, $gender, $scientificName, $weight, $woof)
  		{
  			parent::__construct($firstname, $lastname, $gender, $scientificName, $weight);
  			$this->woof=$woof;
  		}
  		function hello()
  		{
  			return $this->woof;
  		}
  	}
  	
		$kitten1 = new kitten("Blake","Dayman","male","black",15,"woof");
		echo $kitten1->hello() . "<br />" . "<br />";

		$puppy1 = new puppy("Blake","Dayman","male", "bulldog",15,"meow");
		echo $puppy1->greet(); 
?>