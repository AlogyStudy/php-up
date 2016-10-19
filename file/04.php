<meta charset="UTF-8"/>

<?php

	// 判断文件是否存在
	// 获取文件的创建时间/修改时间
	
	$file = './custom.txt';
	
	if ( file_exists($file) ) {
		echo $file, '存在', '<br />';
		echo '上次修改时间：', date('Y-m-d H:i:s', filemtime($file)), '<br />';
		echo '修改时间：', date('Y-m-d H:i:s', filectime($file)), '<br />';
	}
	
?>