<?php

	// 多态
	
	class Light {
		
		// 加一个类名作为参数类型检测
		public function ons(Glass $g ) {
			$g->display();
		}
			
	}
	
	class Glass {
	}
	
	class RedGlass extends Glass {
		public function display() {
			echo 'red light';
		}
	}	
	
	class BuleGlass extends Glass {
		public function display() {
			echo 'blue light';
		} 
	}
	
	class GreenGlass extends Glass {
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