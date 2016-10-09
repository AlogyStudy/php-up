<meta charset="UTF-8" />

<?php

class Human {
	
	private $wife = '小甜甜';
	
	public function cry() {
		echo '555<br/>';
	}
	
	public function pShow() {
		echo $this->wife,'<br />'; // parent::pShow(); 中的 $this 中的 wife 有两个， 考虑执行上下文，只能获取到本类中。
	}
	
}

class Stu extends Human {
	private $wife = 123;
	public $height = 180;
	
	public function subTell() {
		parent::pShow();
		echo $this->wife, '<br />';
	}
	
}

$li = new Stu();

$li->subTell();

?>

