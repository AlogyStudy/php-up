<?php

	// 抽象类的意义
	
	// 场景
//	feacbook 多国语言欢迎界面
	
	// user登陆， 有一个 c 字段，是其国家
	// 当各国人登陆时，看到各国语言的欢迎界面
	
	// 各个小组,继承.
	
	abstract class Welcome {
		public abstract function wel();
	}
	
	class China extends Welcome {
		public function wel() {
			echo 'china';
		}
	}
	
	class Japan extends Welcome {
		public function wel() {
			echo 'japan';
		}
	}
	
	class English extends Welcome {
		public function wel() {
			echo 'english';
		}
	} 
	
	$c = 'english';
	$wel = new $c;
	
	$wel->wel();
	
?>