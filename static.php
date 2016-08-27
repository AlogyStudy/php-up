<?php

	function t() {
		
		static $age = 1;
		
		return $age += 1;
		
	}
	
	echo t();
	echo t();
	echo t();
	
	// 静态变量 不再和 执行的结构体， 也不再和 入栈的符号表有关。
	