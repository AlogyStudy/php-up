<?php

	spl_autoload_register('Pink::autoload');

	class Pink {
		public static function autoload( $c ) {
			require('./' . $c . '.php');
		}
	}
	
	$human = new HumanModel();
	
	$human->t();	

?>