<?php

	class Human {
		public $name = 'Ryo';
		public function who () {
			echo $this->name;
		}
	}
	
	$a = new Human();
	
	echo $a->name;
	
	$a->who();

?>