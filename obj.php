<?php
	
	class Dog {
		
		public $name = 'kitty';
		
		public function __toString () {
			return $this->name;
		}
		
	}
	
	$dog = new Dog();

	
	define('DOG', $dog);
	
	print_r(DOG);
	
/**
 * define 值为对象时，会把对象装成标量来存储，需要类有 __toString魔术方法
 */	
 