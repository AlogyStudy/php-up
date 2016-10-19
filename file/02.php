<meta charset="UTF-8" />
<?php

// fopen fwrite fclose fread

// fopen($filename, $mode)

	$file = './a.txt';
	
	// 返回获取资格的标识
	$fh = fopen($file, 'r');
	
	// 沿着上面返回的$fn资源通道来读文件
	echo fread($fh, 10);
	
	$rs = fwrite($fh, 'xixihaha');
	echo $rs; // 0 // 只读，不允许写入
	
	fclose($fh);
	
	$file = './a.txt';
	
	// r+ 读写模式， 并把指针指向文件头
	// 覆盖相等字节的字符串
	$fh = fopen($file, 'r+');
	
	$rs = fwrite($fh, 'hahahaha');
	echo $rs; 
	
	echo '<hr />';
	
	// w 写入模式(fread读取不了)， 并把文件大小截为0，指针停于开头处
	$file = './modew.txt';
	$fh = fopen($file, 'w');
	
	fclose($fh);
	echo 'ok';
	
	echo '<hr />';
	
	// a 追加模式 能写，并把指针停止在文件的最后.
	$fh = fopen('./modea.txt', 'a');
	
	echo fwrite($fh, '嘻嘻哈哈');
	
	fclose($fh);
		
?>