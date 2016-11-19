<?php

	header('Content-Type: image/png');
	
	$im = imagecreatefromjpeg('./123.jpg');
//	$im = imagecreatetruecolor(100, 100);
		
	$red = imagecolorallocate($im, 200, 10, 10);
	
	$pink = imagecolorallocate($im, 200, 100, 100);
	$font = './fang.TTF';
	imagettftext($im, 50, 15, 100, 200, $pink, $font, '嘻嘻哈哈');

//	imagefill($im, 20, 10, $red);
	
	imagepng($im);	
	
	imagedestroy($im);			

?>