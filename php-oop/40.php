<?php

	interface animal {
		public function eat();
	}
	
	interface monkey {
		public function run();
		public function cry();
	}
	
	interface wisdom {
		public function think();
	}
	
	interface bird {
		public function fly();
	}
	
	// 每个类中的这种功能拆分出来.
	class Human implements animal, monkey, wisdom {
		public function eat() {
			echo 'eat';
		}
		public function run() {
			echo 'run';
		}			
		public function cry() {
			echo 'ku';
		}
		public function think() {
			echo 'MISS';
		}
	}	
	
	$human = new Human();
	
	$human->think();
	
?>
