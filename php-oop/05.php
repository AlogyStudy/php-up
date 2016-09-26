<meta charset="UTF-8"/>
<?php

class Human {
	
	public $name = null;
	public $gender = null;
	
	public function __construct ( $name, $gender ) {
		
		$this->name = $name;
		$this->gender = $gender;
		
		echo 111,'<br />';
		
	}
	
	public function __destruct () {
		
		echo '寻找', '<br />';
		
	}
		
} 

$a = new Human('Ryo', 'nan');

$b = new Human('b', 'n');

$c = new Human('c', 'n');

unset($a);

$b = false;
echo '<br />';

$c = null;
