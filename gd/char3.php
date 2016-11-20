<?php

	$im = imagecreatetruecolor(800, 600);
	
	$gray = imagecolorallocate($im, 100, 100, 100);
	$red = imagecolorallocate($im, 250, 100, 100);
	$green = imagecolorallocate($im, 100, 250, 100);
	$blue = imagecolorallocate($im, 100, 100, 250);
	
	imagefill($im, 0, 0, $gray);
	
	// 圆弧
	imagearc($im, 400, 300, 400, 400, 0, 90, $green);
	/**
	 * 1 IMG_ARC_CHORD  直线连圆弧2端
	 * 0 IMG_ARC_PIE    弧线连圆弧2端
	 * 2 IMG_ARC_NOFILL 不填充轮廓(默认是填充) 
	 * 4 IMG_ARC_EDGED  指明用直线将起始和结束与中心点相连
	 */
	imagefilledarc($im, 420, 320, 420, 420, -50, 0, $green, 0+4);
	imagefilledarc($im, 420, 320, 400, 400, -50, 0, $red, 0+4);
	imagearc($im, 400, 300, 400, 400, 270, 0, $blue);
	
	header('Content-type: image/png');
	imagepng($im);
	imagedestroy($im);

?>