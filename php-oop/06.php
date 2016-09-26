<?php

		
	class Human {
		public $name = null;
		public $genger = null;
		
		public function __destruct () {
			echo 'die <br />';
		}
		
	}
	
//	$a = new Human();
	
//	$b = $c = $d = $a;
//	
//	unset($a);

	$a = true;
	
	echo '<hr />';
	
	$e = $f = $g = new Human();
	
	unset($e);
	echo 'unset e<br />';
	
	unset($f);
	echo 'unset f<br />';
	
	unset($g);
	echo 'unset g<br />';
		
?>