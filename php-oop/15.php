<?php

	class Sixty {
		protected $wine = 10;
		
		public function play() {
			echo '谈理想<br />';
		}
		
	}
	
	class Nine extends Sixty {
		
		public function play() {
			echo 'game <br />';
		}
		
		public function Qq() {
			echo 'momo';
		}
		
		public function showWin() {
			echo $this->wine;
		}
		
	}


	$s9 = new Nine();
	
	// echo $s9->wine, '<br />'; // 父类有的，继承过来
	 
	$s9->showWin(); // 继承过来，可以修改/覆盖
	
	echo '<br />'; // 父类没有，可以添加
	
	$s9->Qq();
	
?>
