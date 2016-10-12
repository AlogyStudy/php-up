<?php

class A {
	public function foo() {
		
		if ( isset($this) ) {
			echo '$this is defined (' . get_class($this) . ') <br/>';
		} else {
			echo '$this is not defined <br/>';
		}
		
	}
}

class B {
	
	public function bar() {
		A::foo();
	}
	
}


$a = new A();
$a->foo(); // true

A::foo(); // false

$b = new B();
$b->bar(); // true  // bar 是普通方法，$b绑定到$this,bar(){ A::foo- 这里是静态调用，不操作$this }
										// $this is defined (B); 

B::bar(); // false

?>