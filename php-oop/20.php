<?php

	// 多态
	
	class Light {
		
		// 加一个类名作为参数类型检测
		public function ons(RedGlass $g ) {
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
	
	$red = new RedGlass();
	
	$blue = new BuleGlass();
	
	$light->ons($red);
	
	$light->ons($blue);
	
	
	
?>