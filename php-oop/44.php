<?php

	// 告知系统，把`zidongjiazai`注册成为自动加载功能的函数
	spl_autoload_register('zidongjiazai');	

	function zidongjiazai( $c ) {
		
		require('./'. $c . '.php');	
			
	}
	
	$h = new HumanModel();
	
	$h->t();

?>
