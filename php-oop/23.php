<?php

	// 普通方法，存在于类内的，只有1份。
	// 静态方法，存在于类内，只有1份。
	
//	区别：
//	普通对象，需要对象去调用，需要绑定$this。
//	静态方法，不属于那个对象，因此不需要去绑定$this

		error_reporting(E_ALL|E_STRICT);

		class Human {
			
			static public function cry() {
				echo '5555';
			}
			
			public function eat() {
				echo 'ect';
			}
			
		}
	
		Human::cry();
		
		// eat 方法，是非静态方法，应该由对象调用。
		Human::eat();
		
		$m = new Human();
		
		$m->cry();
		
?>