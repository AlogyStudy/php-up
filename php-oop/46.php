<meta charset="UTF-8"/>
<?php

	// 异常处理
	
	error_reporting(0); // 关闭所有错误报告 
	
	class Mysql {
		protected $conn = null;
		public function __construct() {
			
			$this->conn = mysql_connect('localhost', 'root', '123');
			
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

	try { // 测试, 捕捉错误信息
		$mysql = new Mysql(); // 返回mysql对象，并且自动连接上了数据库 
	} catch ( Exception $e ) { 
		echo '捕捉到错误信息为：'. $e->getMessage(),'<br/>';
		echo '错误代码为：'. $e->getCode().'<br/>';
		echo '错误文件为：'. $e->getFile().'<br/>';
		echo '错误行：'. $e->getLine();		
	} catch ( Exception $o ) {
		echo 'error', $o;
	}
	
	var_dump($mysql);
	
	if ( $mysql instanceof Mysql ) {
		echo '创建成功';
	} else {
		echo '创建失败';
	}
	
?>