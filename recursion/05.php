<?php
	
	// 递归删除目录
	
	function deldir($path) {
		
		// 不是目录直接返回
		if ( !is_dir($path) ) {
			return NULL;
		}
		
		$dh = opendir($path);
		
		while ( ($row = readdir($path)) !== false ) {
			
			if ( $row == '.' || $row == '..') {
				continue;
			}
			
			// 判断不是普通文件
			if (!is_dir($path . '/' .$row)) {
				unlink($path . '/' .$row);
			} else {
				deldir($path . '/' .$row);
			}
			
		}

		// 关闭		
		closedir($dh);
		
		// 删除自身
		rmdir($path);
		
		return true;
		
	}
	
?>