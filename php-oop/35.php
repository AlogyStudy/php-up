<?php

	// 魔术常量
	echo __FILE__;
	
	echo __CLASS__;
	
	echo __LINE__;
	
	echo __DIR__;
	
	echo __FUNCTION__;
	
	class Human {
		public static function t() {
			echo __CLASS__; // Human
			echo __METHOD__; // Human::t
			echo __FUNCTION__; //t
		}
	}
	
	Human::t();
	
	
	
?>