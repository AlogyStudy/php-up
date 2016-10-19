<?php

	// 自动加载
	
	function __autoload( $c ) {
		
		require('./'. $c . '.php');
		
	}
	
	$zf = new HumanModel();
	$zf->t();
	
	echo '<hr/>';
	
	function say() {
		class Bird {
			public function stirng() {
				echo 'stirng..';
			}
		}
	}
	
	say(); 
	Bird::stirng();
	
?>