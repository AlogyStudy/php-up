<?php


	class Human {
		
		private $moeny = 1000;
		private $bank = 2000;
		
		private function getBank ( $num ) {
			$this->bank -= $num;
			return $num;
		}
		
		public function send ( $much ) {
			
			if ( $much > $this->money + $this->bank  ) {
				
				return false;
				
			} else if ( $much > $this->money ) {
				
				$num = $much - $this->moeny;
				
				$this->moeny += $this->getBank($num);
				
				$this->money -= $much;
				
				return $much;
				
			} else {
				
				$this->money -= $much; 
				
				return $much;
			}
		}
		
		public function showMoney () {
			echo $this->money;
		} 
		
	}

	$li = new Human();
	
	$m = $li->send(300);
	
	if ( $m ) {
		echo 'jie',$m,'元<br/>';
	}
	
	
	class Mood {
		public $mood = '';
		private $money = 1000;
		private function secret () {
			echo 'secret';
		} 
		public function tellMe () {
			$this->secret();
		} 
	}
	
	$zf = new Mood();
	
	$zf->mood = 'happy';
	
	echo $zf->mood;
	
	
?>