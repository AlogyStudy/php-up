<?php

	// 创建画布
	$im = imagecreatetruecolor(50, 20);
	
	// 颜色
	$red = imagecolorallocate($im, 200, 10, 10);
	
	// 画
	$str = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
	$str = substr(str_shuffle($str), 0, 4);
	
	imagestring($im, 5, 10, 2, $str, $red);
			
	// 输出
	header("Content-type: image/png");
	imagepng($im);
	
	// 关闭
	imagedestroy($im);
	

?>