<?php

	class Animal {
		const age = 1;
		public static $leg = 4;
		
		public static function cry() {
			echo '555<br/>';
		}
		public static function t1() {
			self::cry(); // 555
			echo self::age,'<br/>'; // 1 
			echo self::$leg,'<br/>'; // 4
		}
		public static function t2() {
			static::cry(); // yingying 
			echo static::age,'<br />'; // 16
			echo static::$leg,'<br />'; // 2
		}
	}
	
	class Human extends Animal {
		const age = 30;
		public static $leg = 2;
		public static function cry() {
			echo 'wawa <br/>';
		} 
		
	}
	
	class Stu extends Human {
		const age = 16;
//		public static $leg = 3;
		public static function cry() {
			echo 'yingying <br/>';
		}
	}
	
	Stu::t1();
	Stu::t2();
	
?>