<?php

	class Human {
		public function say( $c ) {
			echo $c,'chi';
		}
	}
	
	class Stu extends Human {
		public function say() {
			echo 'Stu chi';
		}
	}
	
	$zf = new Stu();
	$zf->say(); // 覆盖/重写  override
	$zf->say('pink');
	
	class Clac {
		public function area() {
			// 判断调用area调用的参数个数
			$args = func_get_args();
			
			if ( count($args) == 1 ) {
				return 3.14 * $args[0] * $args[0]; 
			} elseif ( count($args) == 2 ) {
				return $args[0] * $args[1];
			} else {
				return '??';
			}
			
		}
	}
	
	$c = new Clac();
	echo $c->area(10,20);
	
?>