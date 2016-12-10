<?php

	session_start();
	
	$_SESSION['pink'] = '10';
	$_SESSION['tan'] = array('嘻', '嘻', '哈', '哈');
	
	class Dog {
		public $age = 10;
	}
	
	$dog = new Dog();
	
	$_SESSION['dog'] = $dog; 

	echo 'ok';
?>