<meta charset="UTF-8"/>
<?php

	// 把excel导入数据库的方法
	// excel -> csv -> 文本处理
	
	echo '<pre>';
	$file = './score.csv';

	$fh = fopen($file, 'rb');	
//	
//	// 思路1： fgets(); 每次读取一行, 用逗号拆成数组
//	
//	while ( !feof($fh) ) {
//		$row = fgets($fh);
//		print_r( explode(',', $row) );				
//	}
	
	echo '<hr />';

	// 思路2： fgetcsv(); // 封装了csv文件相关规范
	while ( !feof($fh) ) {
		$row = fgetcsv($fh);
		print_r($row);
	}
	
	
?>