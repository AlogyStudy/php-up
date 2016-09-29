<meta charset="UTF-8"/>

<?php

class Human {
	private $wife = '小甜甜';
	
//	public function tell() {
//		echo $this->wife, '<br />';
//	}
	
	public function cry() {
		echo '555<br/>';
	}
	
}

class Stu extends Human {
	public function subTell() {
		echo $this->wife;
	}
}

$li = new Stu();

$li->cry();
$li->subTell(); // 错误

//$li->tell();

?>
