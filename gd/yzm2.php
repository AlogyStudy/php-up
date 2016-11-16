<?php

	// 创建画布
	$im = imagecreatetruecolor(100, 20);
	
	// 颜色
	$red = imagecolorallocate($im, 200, 10, 10);
	
	// 画
	
			
	// 输出
	header("Content-type: image/png");
	imagepng($im);
	
	// 关闭
	imagedestroy($im);
	

?>