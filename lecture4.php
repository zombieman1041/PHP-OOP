<?php
	class human{
		public $race;
		public $name;
		public $hobby;
		public $job;

		function __construct($race, $name, $hobby, $job){
			$this->race = $race;
			$this->name = $name;
			$this->hobby = $hobby;
			$this->job = $job;
		}
		public function greet(){
			return "My race is " . $this->race . " and my name is " . $this->name; 
		}
		public function convo(){
			return "My hobby is " . $this->hobby . "my job is " . $this->job; 
		}	
	}
	$me = new human('Asian ','Blake ');
	echo $me->greet();
	$me = new human('tennis','computer programming');
	echo $me->convo();
?>