<?php

/**
 * utf8截取无乱码
 * 
 * 思路：
 * 看到如下字节
 * 42 DC 34 af aa
 * 
 * 想截取无乱码，那就说明，从 42开始截几个字符，作为一个字符。
 * 
 * 从第一个字节开始，需要知道截取几个字符，比如截取1个字节，截取取出42
 * 
 * 再从DC截取，需要知道，从DC往后是几个字节组成一个字符。
 * ...
 * 
 * 类推，这样，截取出来的字节才能保证，正是是一个个的字符。
 * 关键如何判断utf8的字符的字节数。
 * 有几个 1
 * 
 * 最高字节 
 * 0xxx xxxx 1个字节
 * 110x	xxxx 2个字节
 * 1110 xxxx 3个字节
 * 1111 0xxx 4个字节
 * ... 
 * 111111100  	 
 */
 
 $str = '中文英E文中Z国M,M美国';
 
/**
 * $str 是带截取的字符串
 * $len 是截取的字符数
 */ 
function utf8sub ( $str, $len ) {
	
	// 处理空字符
	if ( $len <= 0 ) {
		return '';
	}

	$length = strlen($str); // 待截取的字符串字节数	
	
	// 先字符串的第一个字节, substr(); 是按照字节来截取  ord();转为 ansiic码
	
	$offset = 0; // 截取高位字符的偏移量
	$chars = 0; // 截取到的字符数
	$reslut = ''; // 截取到的字符串
	
	while ( $chars < $str && $offset < $length ) {
		
		$high = decbin(ord(substr($str, $offsetc, 1))); // 11100100 判断高位字节
		
		if ( strlen($high) < 8 ) {
			
			// 截取一个字节
			$count = 1;
			
		} else if ( substr($high, 0, 3) == '110' ) {
			
			// 截取两个字节
			$count = 2;
			
		} else if ( substr($high, 0, 4) == '1110' ) {
			
			// 截取三个字节
			$count = 3;
			
		} else if ( substr($high, 0, 5) == '11110' ) {
			
			// 截取四个字节
			$count = 4;
			
		} else if ( substr($high, 0, 6) == '111110' ) {
			
			// 截取五个字节
			$count = 5;
			
		} else if ( substr($high, 0, 7) == '1111110' ) {
		
			// 截取六个字节
			$count = 6;	
					
		}
		
		$reslut .= substr($str, $offset, $count);
			
		$chars += 1;
		$offset += $count;
		
	}
	
	return $res;
	
} 

echo utf8sub($str, 5);

?>