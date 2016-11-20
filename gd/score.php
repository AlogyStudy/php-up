<?php

	/**
	 * 1. 图片复制，完成水印与缩略图
	 * 2. 写一个图片处理类，包含验证码功能[水印功能/缩略图功能]
	 */

	$gaozhong = isset($_POST['gaozhong']) ? $_POST['gaozhong'] : 0;
	$chuzhong = isset($_POST['chuzhong']) ? $_POST['chuzhong'] : 0;
	$xiaoxue = isset($_POST['xiaoxue']) ? $_POST['xiaoxue'] : 0;

	$gaozhong = 150;
	$chuzhong = 100;
	$xiaoxue = 50;
	
	// 最小值
	$min = $xiaoxue;
	if ( $gaozhong < $min  ) {
		$min = $gaozhong;
	} 	
	if ( $chuzhong < $min ) {
		$min = $chuzhong;
	}
	
	// 求最大公约数
	for ( $i = $min; $i>0; $i-- ) {
		
		if ( $gaozhong%$i == 0 && $chuzhong%$i == 0 && $xiaoxue%$i == 0 ) {
			$gongyueshu = $i;
			break;								
		}
		
	}
	
	$im = imagecreatetruecolor(400, 400);
	
	$gray = imagecolorallocate($im, 100, 100, 100);
	$red = imagecolorallocate($im, 250, 100, 100);
	$green = imagecolorallocate($im, 100, 250, 100);
	$blue = imagecolorallocate($im, 100, 100, 250);
	
	// 饼状图
	
	$g = 360 / ($gaozhong / $gongyueshu); 
	$c = 360 / ($chuzhong / $gongyueshu);
	$x = 360 - $g - $c;
//	echo $g, $c, $x; // 120 180 60

//	$gaozhong = 150;
//	$chuzhong = 100;
//	$xiaoxue = 50;


	imagefilledarc($im, 200, 200, 200, 200, 0, $g, $red, 0+4);
	imagefilledarc($im, 200, 200, 200, 200, $g, $c, $green, 0+4);
	imagefilledarc($im, 200, 200, 200, 200, $c, $x, $blue, 0+4);
	
//	imagefilledarc($image, $cx, $cy, $width, $height, $start, $end, $color, $style)
	
	
	imagefill($im, 0, 0, $gray);
	
	header('Content-type: image/png');
	imagepng($im);
	
	imagedestroy($im);
	
?>