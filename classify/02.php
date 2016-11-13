<?php

	// static
	
	function t() {
		
		$age = 5;
		
		$age += 1;
		
		return $age;
		 
	}
	
	echo t(),'<br />';
	echo t(),'<br />';
	echo t(),'<br />';
	
	
	function st() {
		
		static $age = 5;
		
		$age += 1;
		
		return $age;
		
	}
	
	echo st(), '<br/>';
	echo st(), '<br/>';
	echo st(), '<br/>';

	// 在函数中声明的static 静态变量，无论此函数调用多少次，只初始化一次。
	// 以后会沿用该变量. 在递归时很有效果.
	
	// static 
	// 1. 可以修饰类的属性与方法为静态属性，静态方法。
	// 2. static::method(); 延迟绑定
	// 3. 在函数/方法中，声明静态变量用。
	
?>