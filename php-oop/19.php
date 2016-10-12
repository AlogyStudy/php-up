<?php

	// 多态
	
	class Light {
		
		/**
		 * 玻璃参数
		 */
		public function ons( $g ) {
			$g->display();
		}
			
	}
	
	class RedGlass {
		public function display() {
			echo 'red light';
		}
	}	
	
	class BuleGlass {
		public function display() {
			echo 'blue light';
		} 
	}
	
	class GreenGlass {
		public function display() {
			echo 'green light';
		}
	}
	
	// 手电筒
	$light = new Light();
	
	// 三块玻璃
	$redGlass = new RedGlass();
	$buleGlass = new BuleGlass();
	$greenGlass = new GreenGlass();
	
	$light->ons($redGlass);
	echo '<hr />';
	$light->ons($buleGlass);
	echo '<hr />';
	$light->ons($greenGlass);

?>