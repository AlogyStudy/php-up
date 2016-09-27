<?php

	class Human {
		
		public $name = 'Ryo';
		
		public function who () {
			
			echo $this->name;
			
		}
//		public function test () {
//			
//			echo $name;
//			
//		}
	}
	
	$a = new Human();
	
	echo $a->name;
	
	$a->who();
	
//	$a->test();

?>