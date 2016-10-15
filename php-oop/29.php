<meta charset="UTF-8"/>
<?php

	// 魔术方法

	// clone
//	class Human {
//		public $age = 23;
//		public function __clone() {
//			echo 'clone <br/>';
//		}
//	}
//	
//	$h = new Human();
//	
//	$m = clone $h;

	class Human {
		private $money = '30';
		protected $age = 23;
		public $name = 'zf';
		public function __get( $property ) {
			echo '访问'.$this->$property;
		}
		public function __set( $key, $val ) {
			echo $key,$val;
		}
	}

	$zf = new Human();
	
	echo $zf->name;
	echo $zf->money;
	
	$zf->pink = 100;
	
	echo '<hr />';
	
	class Dog {
		public $leng = 4;
		public function __isset( $l ) {
			echo '判断',$l;
		}
		public function __unset( $g ) {
			echo 'unset',$g;
		}
	}
	
	$hua = new Dog();
	
	if ( isset($hua->leng) ){
		echo $hua->leng;
	}
	
	if ( isset($hua->pink) ){
		echo 'wu';
	}
	
	echo '<hr />';
	
	unset($hua->tan);
	print_r($hua);
		
?>