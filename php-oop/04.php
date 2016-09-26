<meta charset="UTF-8"/>
<?php

class Human {
	
	public function __construct ( $name, $gender ) {
		
		$this->name = $name;
		$this->gender = $gender;
		
	}
	
	public $name = null;
	public $gender = null;
		
} 

$g = new Human('李寻欢', '男');

echo $g->name, '<br />';
echo $g->gender;


?>