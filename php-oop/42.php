<?php

	// 抽象的数据库类
	abstract class db {
		
		public abstract function connect( $h, $u, $p );
		
		public abstract function query( $sql );
		
		public abstract function close(); 
			
	}
	
	class Mysql extends db {
		public function connect( $h, $u, $p ) {
			return true;
		}
		public function query( $sql ) {
			
		}
		public function close() {
			
		}
		public function aa() {}
	}
	
	// interface
	interface UserBase {
		public function login($u, $p);
		public function logout();
	}
	
	interface UserMsg {
		public function writeMsg($to, $title, $content);
		public function readMsg($from, $title);
	}
	
	interface Userfrom {
		public function spit($to);			
		public function shoLove($to);
	}
	
	
	// 通过接口，可以规范开发
	// 接口强制统一了类的功能
	
	class User implements UserBase {
		public function login( $u, $p ) {
			
		}
		public function logout() {
			
		}
		public function xi() {
			
		}
	}
	
	
?>