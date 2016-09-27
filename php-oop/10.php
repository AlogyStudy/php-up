<?php

	class Human {
		
		private $money = 1000;
		
		public function getMoney ( $people ) {
			
			return $people->money;
			
		}
		
		public function setMoney ( $people ) {
			
			$people->money = 500;
			
		}
		
	}
	
	$lin = new Human();
	$zf = new Human();
	
//	echo $lin->money;

	echo $lin->getMoney($zf);
	
	$lin->setMoney($zf);
	
	echo $lin->getMoney($zf);	
	
?>