<?php

	class Man {
		
		public $iq = 100;
		
		public function say () {
			
			$arr = array('早上好', '晚上好', 'maren');
			
			if ( $this->iq >= 100 ) {
				
				echo $arr[0];
				
			} else {
				
				$i = rand(0,2);
				
				echo $arr[$i];
				
			}
			
		}
	}

	
	class Car {
		public function hit ( $people ) {
			$newIq = rand(50, 110);
			$people->iq = $newIq;
		}
	}
	
	
	$lisi = new Man();
	$car = new Car();
	
	$list->say();
	echo '<br />';
	
	$car->hit($lisi); 

	echo $list->iq,'<br />';	
	$list->say();
	echo '<br />';
	$list->say();
	
	echo '<br />';
	$list->say();
	echo '<br />';
	
	
?>
