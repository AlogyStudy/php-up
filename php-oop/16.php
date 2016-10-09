<?php
	
	echo ' 文件报错 <br/>';
	
	class Human {
		public function cry() {
			echo '111<br/>';
		}
	}
	
	class Stu extends Human {
		
		protected function cry() {
			
			echo '595959 <br />';
			
		}
		 
	}
	
	/**
	 * 报错
	 */
	// 子类的cry比父类的cry方法，权限要严格，会报错。
	// 继承时，权限只能越来越宽松或不变，并不能越来越严格。 

?>