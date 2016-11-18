<?php

	// 创建画布
	$im = imagecreatetruecolor(50, 20);
	
	// 灰色背景
	$gray = imagecolorallocate($im, 100, 100, 100);
	
	// 颜色
	$red = imagecolorallocate($im, 200, 10, 10);
	
	// 随机颜色
	$randcolor = imagecolorallocate($im, mt_rand(150, 255), mt_rand(150, 255), mt_rand(150, 255));
	
	$linecolor1 = imagecolorallocate($im, mt_rand(150, 255), mt_rand(150, 255), mt_rand(150, 200));
	$linecolor2 = imagecolorallocate($im, mt_rand(150, 200), mt_rand(100, 180), mt_rand(150, 222));
	$linecolor3 = imagecolorallocate($im, mt_rand(120, 150), mt_rand(150, 255), mt_rand(150, 240));
	
	// 填充背景
	imagefill($im, 5, 8, $gray);
	
	// 线
	imageline($im, 0, mt_rand(0, 20), 50, mt_rand(0, 20), $linecolor1); 
	imageline($im, 0, mt_rand(0, 20), 50, mt_rand(0, 20), $linecolor2); 
	imageline($im, 0, mt_rand(0, 20), 50, mt_rand(0, 20), $linecolor3); 
	 
	// 数字
	$str = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
	$str = substr(str_shuffle($str), 0, 4);
	
	imagestring($im, 5, 10, 2, $str, $randcolor);
			
	// 输出
	header("Content-type: image/png");
	imagepng($im);
	
	// 关闭
	imagedestroy($im);

?>