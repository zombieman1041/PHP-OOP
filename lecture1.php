<?php
	class human {
		public $firstName = "default name";
		public $lastName= "default last name";

		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
	}
	class animal{
		public $firstName = "default name";
		public $lastName= "default last name";

		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
	}
	class alien{
		public $firstName = "default name";
		public $lastName= "default last name";
		
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}			
	}
	$human1 = new human();
	$human1­>firstName = "Blake";
	$human1­>lastName = "Dayman";

	print "The strangers name is {$human1->getName()}";
	// default name

	$human2 = new human();
	$human2­>firstName = "Dayman";
	$human2­>lastName = "Dayman";
	print "The strangers name is {$human2->getName()}";
	// default name

	$animal1 = new animal();
	$animal1­>firstName = "Blake";
	$animal1­>lastName = "Blake";
	print "The animals name is {$animal1->getName()}";
	// default name

	$animal2 = new animal();
	$animal2­>firstName = "Dayman";
	$animal2­>lastName = "Blake";
	print "The animals name is {$animal2->getName()}";
	// default name

	$alien1 = new alien();
	$alien1­>firstName = "ekalB";
	$alien1­>lastName = "namyaD";
	print "The aliens name is {$alien1->getName()}";
	// default name

	$alien2 = new alien();
	$alien2­>firstName = "namyaD";
	$alien2­>lastName = "ekalB";
	print "The aliens name is {$alien2->getName()}";
	// default name
	
	?>