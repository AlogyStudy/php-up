<?php
	
	interface animal {
//		public $age = 10;
		public function eat();
	}
	
	interface monkey extends animal {
		public function run();
		public function cry();
	}
	
	interface wisdom {
		public function think();
	}
	
	interface bird extends animal {
		public function fly();
	}
	
	class Human implements monkey, wisdom {
		
		public function eat() {
			echo 'eat';
		}
		public function run() {}
		public function cry() {}
		public function think() {}
		
	}
	
	$human = new Human();
	$human->eat();

?>