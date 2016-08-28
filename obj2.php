<?php
	
	// 对象
	
	class Dog {
		public $leg = 4;
		public $wei = 20;
	}
	
	$dog = new Dog();
	
	// $dog 是一个对象么?
	// 严格说，并不是对象.
	/**
	 * {
	 * 	handle --指向-->  [hash表 {leg: 4, wei: 20}] // hash表中存在 对象	
	 * }
	 */
	 
	$d2 = $dog;
	
	$d2->leg = 5;
	
	echo $dog->leg, '`', $d2->leg; // 5`5
	
	// 对象并不是 引用赋值. 主要原因  zval 结构体 是再次指向一个hash表中的 对象池
	$d2 = false;
	
	echo $dog->leg; // 5
	 
	