<meta charset="UTF-8"/>

<?php
	
	$fileFile = './a.txt';
	
	// file_get_contents(); // 获取一个文件的内容或一个网络资源的内容.
	// 读取文件和网络资源 比较快捷的函数，帮助封装了打开/关闭等操作。 // 该函数是一次性把内容全部读出来，放在内存中. 因此，如果处理上百兆的大文件，慎用此函数。
	$fileCoutent = file_get_contents($fileFile);

	echo $fileCoutent;
	
	file_get_contents($filename)
		
//	echo file_get_contents('http://www.linxingzhang.com');	
	
	
	// file_put_contents($filename, $data); // 该函数用来把内容写入到文件，快捷函数，帮助封装打开写入的细节
	
	file_put_contents('./b.txt', '嘻嘻哈哈');
	
	
?>

