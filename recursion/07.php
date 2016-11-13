<?php

	// 递归对数据进行转义
	
	$arr = array('a"b', array('c"d', array('e"f')));
	
	
	function _addslahes($arr) {
		
		foreach ( $arr as $k => $v ) {
			
			if ( is_array($v) ) {
				$arr[$k] = _addslahes($v);
			}
			
			if ( is_string($v) ) {
				$arr[$k] = addslashes($v);
			} 
				
		}	
		
		return $arr;
		
	}
	
	print_r(_addslahes($arr));
	
?>