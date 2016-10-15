<?php

// 常量  define('常量名', '常量值');

define('ACC', 'xixi');

class Human {
	const HEAD = 1;
	public static function show() {
		echo ACC,'<br />';
		echo self::HEAD; 
	}
}

Human::show();

echo Human::HEAD;


?>

