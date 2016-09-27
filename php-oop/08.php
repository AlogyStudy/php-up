<?php

// public	

//	class Human {
//		public $name = 10;
//	}
//	
//	$h = new Human();
//	
//	echo $h->name;


// private

	class Human {
		
		private $money = 1000;
		
		public function show () {
			return $this->money;
		}
		
	}
	
	$h = new Human();
	
	echo $h->show();

?>