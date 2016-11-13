
<meta charset="UTF-8"/>

<?php

	// 递归与迭代
	
	// 递归自身调用自身，每一次调用把问题简化，直到问题解决。
	
	// 理论上: （借助栈）递归都可以转化为迭代
	
	
	// 迭代创建级联目录
	// ./a/b/c
	
/*	function mk_dir( $path ) {
		
		$arr = array();
		
		while( !is_dir($path) ) {
			
			// 例如：/a/b/c/d 如果不是目录，则是我的工作
			array_unshift($arr, $path);
			$path = dirname($path);
			
		}
		
		if ( empty($arr) ) {
			return false;
		}
		
		// 创建
		
		foreach ($arr as $val) {
			echo '创建',$val,'成功','<br />';
			mkdir($val);
		}
		
		return true;
		
	}*/
	
	function mk_dir( $path ) {
		
		$arr = array();
		
		while ( !is_dir($path) ) {
			array_push($arr,$path);
			$path = dirname($path);
		}
		
		// `$arr` 是空的直接返回 		
		if ( empty($arr) ) {
			return false;
		}
		
		while ( count($arr) ) {
			$tmp = array_pop($arr);
			echo '出栈',$tmp,'<br />';
			mkdir($tmp);
		}
		
		return true;
		
	}
	
	mk_dir('./a/b/c/d/e/f');
	
?>