<?php

//	error_reporting(0);

	class Mysql {
		protected $conn = null;
		public function __construct() {
			
			$this->conn = @mysql_connect('localhost', 'root', '123');
			
			if ( !$this->conn ) {
				// 发送错误信息
				
				// 在PHP中，内置对象
				// Exception 类的对象 
				// new Exception('错误原因', '错误代码');
				$e = new Exception('error', 9); 
				throw $e; // throw 抛出/扔出
				
			}
			
		}
	}
	
	// 内部抛出异常，外部没有 catch,并处理.
	$mysql = new mysql();

?>