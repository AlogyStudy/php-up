<meta charset="UTF-8"/>
<?php

	// 构想，存在脑子中的抽象，只能在图纸化，并不能实例化。
	// 类没有具体的方法去实现，还太抽象，
	// 因此需要把它做成一个抽象类.
	abstract class FiyIdea {
		// 方法也完成不了也是一个抽象方法
		public abstract function engine(); // 发动机
			
		// 方法也完成不了也是一个抽象方法
		public abstract function blance(); // 平衡舵
			
	}
	
	// 实现发动机
	abstract class Rocket extends FiyIdea {
		
		// 实现 引擎，方法并不抽象
		public function engine() {
			echo '点燃火药 。<br />';
		}
		
		// 没有实现平衡舵，对于Rocket 类来说，也是一个抽象类
			
	}
	
	// 所有的抽象方法都已经实现了
	class Fly extends Rocket {
		
		public function engine() {
			echo '有力一扔  <br />';
		}
		
		public function blance() {
			echo '两个纸羽翼<br />';
		}
		
		public function start() {
			$this->engine();	
			
			for ( $i=0; $i<10; $i++ ) {
				$this->blance();
				echo '平稳<br/>';
			}
			
		}
		
	}
	
	$apache = new Fly(); 
	$apache->start();
	
	
	
	abstract class Car {
		public function run() {
			echo 'run car';
		}
	}
	
	class Bwn extends Car {
		
	}
	
	$bwn = new Bwn();
	
	$bwn->run();
	
?>