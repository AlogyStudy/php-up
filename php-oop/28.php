<?php

//	final class Human {
//		
//	} 
//	
//	class Stu extends Human {
//		
//	} 

	// final 无法继承
	
	class Human {
		final public function say() {
			echo 'SAY';
		}
		
	}
	class Stu extends Human {
		public function pink() {
			echo 'PINK';
		} 
		public function say() { // 重写失败
			echo 'SAAA';
		}
	}
	
	$s = new Stu();
	
	$s->say();
	
?> 