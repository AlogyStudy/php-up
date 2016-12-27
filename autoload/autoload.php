<?php

	// 使用第3方插件/库的时候，别的库使用自动加载是正常的.如何协调
	
	function __autoload( $class ) {
		// 自动include类文件
		echo $class, '<br />';
	}
	
	
	// PHP为了能够让多方各自有各自的自动加载函数.
	// 提供了 spl_autoload_register(); 方法  
	// 这个方法，不负责自动加载，负责各自动加载方法.
	
		

?>