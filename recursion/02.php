<?php
	
	// 打印级联目录
	
	function recdir( $path ) {
		
		$dh = opendir($path);
		
		while ( ($row = readdir($dh)) !== false ) {
			// 过滤 `.` 和 `..`
			if ( $row == '.' || $row == '..' ) {
				continue;
			}
			 
			echo $row,'<br />';
			
			
			// 判断给定文件名是否是一个目录
			if ( is_dir($path. '/' . $row) ) {
				recdir($path. '/' . $row);
			}
			
		}
		closedir($dh); 
	} 
	
	recdir('H:\360downloads');	
?>