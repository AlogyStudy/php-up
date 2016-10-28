<?php

	// 递归创建目录
	
//	echo mkdir('./a') ? 'ok' : 'fail';
	
/*	function mk_dir( $path ) {
		
		// 目录直接存在
		if ( file_exists($path) && is_dir($path) ) {
			return true;
		};
		
		// 目录的父目录存在
		if ( is_dir(dirname($path)) ) {
			return mkdir($path);			
		}
		
		mk_dir(dirname($path));
		return mkdir($path);		
		
	}	*/
	
/*	
	function mk_dir( $path ) {
		
		if ( file_exists($path) && is_dir($path) ) {
			return true;
		}
		
		// 父目录并不一定存在，存在调用 mkdir(),或者创建了父目录可以调用mkdir(); 
		return is_dir(dirname($path)) || mk_dir(dirname($path)) ? mkdir($path) : false;
		
	};*/
	
//	echo mk_dir('./a/b/c/d/e/f') ? 'ok' : 'fail';	

	echo mkdir('./aaa/bbb/ccc', 0777, true) ? 'ok' : 'fail';
	
?>