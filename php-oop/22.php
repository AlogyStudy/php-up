<?php

class Human {
	
	static public $head = 1;
	public function changeHead() {
		Human::$head = 9;
	}
	public function getHead(){
		return Human::$head;
	}
	
	// 没有对象，想访问静态的 $head属性
	
	/**
	 * 普通属性包在对象中， 用 对象->属性名， 来访问.
	 * 
	 * 静态属性放在类中，使用什么来访问。
	 * 使用类来访问
	 */
	 
	 // 静态属性既然存放在类空间内：
	 // 1. 类声明完毕，该属性就已经存在，不需要依赖于对象而访问。
	 // 2. 类在内存中就一个，因此，静态属性就一个。 
	 
}

echo Human::$head; // 当一个对象都没有，静态属性随类申明而存在。

// 静态属性就一个，受影响后，所有的对象，
$m1 = new Human(); // 1
$m1->changeHead();

$m2 = new Human();
$m3 = new Human();

echo $m2->getHead(); // 9
echo $m3->getHead(); // 9

?>