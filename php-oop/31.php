<meta charset="UTF-8"/>
<?php

	class Human {
		
		public function hello() {
			echo 'hello';
		}
		
		static public function __callStatic( $method, $arg ) {
			echo '类调用',$method;
			print_r($arg);
			
		}
		public function __call( $method, $arguments ) {
			
			echo '对象调用'.$method;
			print_r( $arguments );
			
		}
		
		private function pink() {
			echo 'pink';
		}
		
		static public $zf = 'zf';
		static public function red() {
			echo self::$zf;
			echo '<br/>red<br/>';
		}
		
	}
	
	$h = new Human();
	
	Human::tan('aa');
	Human::red();
	
//	$h->hello();
//	$h->say('19',123);

?>