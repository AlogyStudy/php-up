<?php

//	function __autoload( $class ) {
//	}
	
	function autoMan( $class ) {
		echo 'autoMan' , '<br />';
		include('./' . $class . '.class.php');
	}
	
	function smartyAutoMan( $class ) {
		echo 'smartyAutoMan';
		include('./' . $class . '.class.php');
	}
	
	spl_autoload_register('autoMan'); // 把autoMan注册成自动加载函数
	spl_autoload_register('smartyAutoMan');


	$man = new Man();
	$smartyAutoMan = new SmartyMan();


	// 可以注册多个自动加载函数，注册了多个，则按先后顺序执行，试图找到需要的类.

	
//	spl_autoload_register();这个优先级，比`__autoload`高，把`__autoload`给覆盖了.

?>