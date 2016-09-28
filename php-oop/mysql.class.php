<?php

	class Mysql {
		
		private $host;
		private $user;
		private $pwd;
		private $dbName;
		private $charset;
		
		private $conn; // 保存服务器连接资源
		
		public function __construct() {
		
			// 读取配置文件，根据配置文件，来设置私有属性
			$this->host = '127.0.0.1';
			$this->user = 'root';
			$this->pwd = '';
			$this->dbName = 'zf';
			
			// 连接
			$this->connect($this->host, $this->user, $this->pwd);	
			
			// 切换库
			$this->switchDb($this->dbName);
			
			// 设置字符集
			$this->setChar($this->charset);
			
		}
		
		/*
		 *	连接 
		 */
		private function connect( $h, $u, $p ) {
			
			
			$conn = mysql_connect($h, $u, $p);
			
			$this->conn = $conn;
			
		}
		
		/**
		 * 切换数据库
		 */
		 public function switchDb( $db ) {
		 	
			$sql = 'use '. $db;
			
			$this->query($sql);
			
		 }
		 
		 /**
		  * 设置字符集
		  */
		public function setChar( $char ) {
			
			$sql = 'set names'. $char;
			
			$this->query($sql);
			
		}  
		
		/**
		 * 发送sql查询
		 */
		public function query( $sql ) {
			
			return mysql_query($sql, $this->conn);
			
		}
		
		/**
		 * 获取多行多列select结果
		 */
		 public function getAll( $sql ) {
			
			$list = array();
			
			$rs = $this->query($sql);
			
			if ( !$rs ) {
				return false;
			}		
			
			while ( $row = mysql_fetch_assoc($rs) ) {
				$list[] = $row;
			}			
		 	
			return $list;
			
		 }
		
		/**
		 * 获取一条记录的select 结果
		 */
		public function getRow( $sql ) {
			
			$rs = $this->query($sql);
			
			if ( !$rs ) {
				return false;
			}
			
			return mysql_fetch_assoc($rs);
			
		} 
		
		/**
		 * 获取一个单个值
		 */
		public function getOne( $sql ) {
			
			$rs = $this->query($sql);
			
			if ( !$rs ) {
				return false;
			}
			
			$row = mysql_fetch_row($rs);
			
			return $row[0];
			
		} 
		
		/**
		 * 关闭资源
		 */
		public function close() {
			
			mysql_close($this->conn);
			
		}
		
	}
	
	echo '<pre>';

	$mysql = new Mysql();
	
	print_r($mysql);
	
	$sql = "insert into t values (7, 'tingzi')";
	
	if ( $a = $mysql->query($sql) ) {
		echo 'query ok';
	} else {
		echo 'no';
	}

	$sql = "select * from stu";
	$arr = $mysql->getAll($sql);
	
	print_r($arr);

	
	// 查询单个
	$sql = "select * from t where tid = 5";
	
	print_r($mysql->getRow($sql));
	
	// 查询共有
	$sql = "select count(*) from t";
	
	print_r($mysql->getOne($sql));


/**
 * 给定一个数组，数组键 -> 列， 数组值->列的值
 * 
 * 然后自动生成insert 语句
 */
 
 
 
?>