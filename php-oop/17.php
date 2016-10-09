<meta charset="UTF-8"/>

<?php

	class Human {
		public function __construct() {
			echo '呱呱坠地';
		}
	}

	class Stu extends Human {
		
	}
	
	$ming = new Stu();
	
?>