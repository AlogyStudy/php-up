<meta charset="UTF-8"/>
<?php

	// 目录操作
	// opendir 打开目录 
	// readdir 读取目录 
	// closedir 关闭目录句柄
	// is_dir 判断是否为目录
	// mkdir 创建目录
	// rmdir 删除目录
	
	
	$path = './';
	
	// opendir 打开目录
	$dh = opendir($path);
	
//	var_dump(readdir($dh)); // .
//	var_dump(readdir($dh)); // ..
//	var_dump(readdir($dh)); // 01.php
	
	// .
	// .. 是虚拟目录，分别代表 当前目录 和 上一级目录
			
	while ( ($filename = readdir($dh)) !== false ) {
		echo $filename; 
		if ( is_dir('./' . $filename) ) {
			echo '是目录';
		}
		echo '<br/>';
	}		
	

?>