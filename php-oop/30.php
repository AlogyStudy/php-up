<?php

	class UserModel {
		
		protected $emial = 'zf@gmail.com';
		protected $data = array();
		
		
		// 设置属性
		public function __set( $key, $val ) {

			$this->data[$key] = $val;
			
		}
		
		// 获取
		public function __get( $attr ) {
			return isset($this->data[$attr]) ? $this->data[$attr] : NULL;
		}
		
		// unset
		public function __unset( $attr ) {
			if ( isset($attr) ) {
				unset($this->data[$attr]);
			}
		}
		
		// isset
		public function __isset( $attr ) {
			return isset($this->data[$attr]);			
		}	
		
		// 插入		
		public function add() {
			
			$sql = "insert into table ( ". implode(',', array_keys($this->data)) ." ) values( ". implode(',', array_values($this->data)) ." )";
			
			return $sql;
			
		}
		
	}

	$userModel = new UserModel();
	$userModel->username = 'xixi';
	$userModel->emial = 'xixi@qq.com';
	
?>