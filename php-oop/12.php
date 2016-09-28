<?php

class Human {
	private $height = 160;
	
	public function cry() {
		echo '555<br/>';
	}
	
}


class Stu extends Human {
	public function lay() {
		echo 'haha <br />'
	}
}

$zhoukou = new Human();
$zhoukou->cry();

$xm = new Stu();
$xm->cry();	



?>