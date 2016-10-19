<?php

	// 用文件操作函数，来批量处理客户名单

	
	// 第一种办法：
	
//	$file = './custom.txt';
//	
//	$cont = file_get_contents($file);
//	
//	print_r( explode("\n", $cont) ); 
	
	/**
	 * 各个操作系统下，换行符并不一致
	 * win: \r\n
	 * *nix: \n
	 * mac: \r
	 */
	
	
//	// 第二种
//	// 打开，一点点的读取，每次读取一行.
//	// fgets(); 每次读取一行
//	
//	$file = './custom.txt';
//	// $mode 可以加`b`,表示以2进制来处理，不受编码的干扰. 
//	$fh = fopen($file, 'rb');
//	
//	// feof(), end of file 的意思
//	// 判断指针是否已经到结尾
//	
//	while ( !feof($fh) ) {
//		echo fgets($fh) , '<br />';
//	}
	
	
	// 第三种
	// file(); 
	$file = './custom.txt';
	$arr = file($file);
	print_r($arr);
	
?>