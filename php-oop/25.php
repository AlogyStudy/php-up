<?php
	
	class Human {
		static $head = 1;
		public function say() {
			echo self::$head,'<br/>';
		} 
		public function show() {
			echo "hello world \n";
		}
	}
	
	$human = new Human();
	
	$human->say();

	class Stu extends Human {
		static public $head = 2;
		
		public function say() {
			echo parent::$head,'<br/>';
			echo self::$head,'<br/>';
		}
		
		public function show() {
			parent::show();
		}
		
	}
	
	$stu = new Stu();
	$stu->say();
	
	$stu->show();

?>