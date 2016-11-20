<?php

	$im = imagecreatetruecolor(800, 600);
	
	$gray = imagecolorallocate($im, 100, 100, 100);
	$green = imagecolorallocate($im, 100, 250, 100);
	$red = imagecolorallocate($im, 250, 100, 100);
	$blue = imagecolorallocate($im, 100, 100, 250);
	
	imagefill($im, 0, 0, $gray);
	
	// 400 * 200 矩形
	imagefilledrectangle($im, 200, 200, 600, 400, $green);
	// 椭圆
	imagearc($im, 400, 300, 400, 200, 0, 360, $red);
	imagefilledarc($im, 400, 300, 400, 200, 0, 360, $red, 4);
	imagefilledellipse($im, 200, 300, 400, 200, $blue);
	// 正圆
//	imagearc($im, 400, 300, 400, 400, 0, 360, $red);
	
	header('Content-type: image/png');
	
	imagepng($im);
	imagedestroy($im);

?>