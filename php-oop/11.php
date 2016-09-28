<?php


class Human {
	private $height = 160;
	
	public function cry() {
		echo '555<br/>';
	}
	
}

class Stu {
	private $height = 170;
	
	public $snum = '00123';
	
	public function cry() {
		echo '59..59<br />';
	}
	
	public function study() {
		echo 'good good study day day up <br />';
	}
	
}

class Lawer {
	private $height = 180;
	
	public $area = '案件';
	
	public function cry() {
		echo '555<br />';
	}
	
	public function bianhu() {
		echo 'bianhu <br />';
	}
	
}

$zhoukou = new Human();
$zhoukou->cry();

$xm = new Stu();

$xm->cry();
$xm->study();


$li = new Lawer();

$li->cry();
$li->bianhu();

?>