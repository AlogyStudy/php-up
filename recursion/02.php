<?php
	
//	模仿`tree /f`命令
	
	// 打印级联目录
	
	function recdir( $path, $lev = 1 ) {
		
		$dh = opendir($path);
		
		while ( ($row = readdir($dh)) !== false ) {
			// 过滤 `.` 和 `..`
			if ( $row == '.' || $row == '..' ) {
				continue;
			}
			
			echo '|-',str_repeat('-', $lev),$row,'<br />';
			
			// 判断给定文件名是否是一个目录
			if ( is_dir($path. '/' . $row) ) {
				recdir($path. '/' . $row, $lev + 1);
			}
			
		}
		closedir($dh); 
	} 
	
	recdir('H:\360downloads', 1);
		
?>