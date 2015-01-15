<?php
	class human{
		public $race;
		public $name;
		public $hobby;
		public $job;

		function __construct($race,$name,$hobby,$job){
			$this->race = $race;
			$this->name = $name;
			$this->hobby = $hobby;
			$this->job = $job;
		}
		public function getName(){
			return "My race is " . $this->race . " and my name is " . 
			$this->name . "My hobby is " . $this->hobby . " my job is " . $this->job; 
		}	
	}
	class Me{
		function greet(){
			return $this->$race;
		}
	}
	$Me = new human('Asian','Blake','airsoft','school');
	echo $Me->getName();
?>