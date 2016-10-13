<?php

	// 使用$this,还是使用parent
	class A {
		public function a1() {
			echo 'this is class function a1()';
		}
		public function a2() {
			echo 'this is class function a2()';
		}
	}
	
	class B extends A {
		public function b1() {
			$this->a1();
		}
		public function b2() {
			parent::a2();
		}
	}
	
	$b = new B();
	$b->b1();
	$b->b2();
	
	// 如果从速度上看，理论上 parent::稍快一点点.
	// 因为在子类寻找a1方法,寻找不到，再去其父类寻找.
	
	// 从面向对象角度看, 继承过来的，就是自己的。
	// $this 更符合面向对象的思想.
	
?>