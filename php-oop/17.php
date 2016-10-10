<meta charset="UTF-8"/>

<?php

	class Human {
		public function __construct() {
			echo '呱呱坠地';
		}
	}

	class Stu extends Human {
		
	}
	
	class King extends  Human {
		public function __construct() {
			echo '<br />king';
		} 
	}
	
	$ming = new Stu();
	$king = new King();
	
	class Mysql {
		
		protected $con = NULL;
		
		public function __construct() {
			$this->con = mysql_connect('localhost', 'root', '');
		}
		
		public function query( $sql ) {
			return mysql_query($sql, $this->con);
		}
		
	}
	
	class MyDb extends Mysql {
		
		public function __construct() {
			// 如果子类继承时，有构造函数，保险一点
			parent::__construct();
			return true;
			
		}
		
		public function autoInsert() {
			return $this->query('use test');
		} 
		
	}
	
//	$mysql = new Mysql();
//	var_dump($mysql->query('use test'));
	
	$mysql = new MyDb();
	
	var_dump($mysql->autoInsert());
	
	
?>