<?php

	// 批量处理文件内容
	
	/**
	 * 思路:
	 * 循环文件名
	 * 判断大小  filesize()  < 10字节删除 
	 * 判断是否有 fuck 单词. 如果有使用 unlink() 删除.
	 */
	 
	foreach ( array('a.txt', 'b.txt') as $val ) {
		
		$file = './' . $val;
		
		// 判断大小
		if ( filesize($file) < 10 ) {
			unlink($file);
			echo $file . '小于 10 字节';
			continue;
		}
		
		// 判断内容
		$cont = file_get_contents($file);
		if ( stripos($cont, 'fuck') !== false ) {
			unlink($_file);
			echo $file . '文明用语';
		}		
		
	} 

?>
