<?php

	class Human {
		
		private $name = 'changzhifang';
		protected $money = 3000;
		public $age = 23;
		public function say() {
			echo $this->money, '--', $this->age;
		}
		
	}

	class Stu extends  Human {
		private $npy = 'lin';
		public function talk() {
			echo $this->money, '--', $this->age, '---', $this->name;
		}
	}

	
	$zf = new Stu();
	
//	echo $zf->npy; // 类外不能调用private
//	echo $zf->money; // 类外不能调用protected
//	echo $zf->age; // public 能够在类外调用
	
	echo $zf->talk();
	
	echo '<hr />';
	
	$czf = new Human();
	
	$czf->say();
	 
?>