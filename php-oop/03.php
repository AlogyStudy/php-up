<meta charset="UTF-8"/>

<?php

class Human {
	public $age = 100;
}

$a = new Human();

echo $a->age;

class People {
	public $age;
}

$b = new People();

var_dump($b->age);

function time1 () {
	
}

time1();

class Clock {
	public function time () {
		echo '现在的时间戳是123123';
	}
	public function time1 () {
		echo '时间戳',time();
	}
}

$c = new Clock();
echo $c->time(),'<br />';
echo $c->time1();

?>