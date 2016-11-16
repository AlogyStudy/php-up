<?php

	// 画布
	$im = imagecreatetruecolor(80, 20);
	
	$red = imagecolorallocate($im, 200, 2, 2);
	
	$str = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ23456789';
	
	$str = substr(str_shuffle($str), 0, 4);
	
//	imagestring($im, 5, 20, 0, 'HELLO WORLD!', $red);
	imagestring($im, 5, 20, 0, $str, $red);

	header("Content-type: image/png");
	
	imagepng($im);
	
	imagedestroy($cat);

?>