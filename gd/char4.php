<?php

	$im = imagecreatetruecolor(800, 600);
	
	$color = imagecolorallocate($im, 100, 100, 100);
	$green = imagecolorallocate($im, 100, 250, 100);
	$red = imagecolorallocate($im, 250, 100, 100);
	$blue = imagecolorallocate($im, 100, 100, 250);
	
	
	imagefill($im, 0, 0, $color);
	
	imageellipse($im, 100, 100, 100, 100, $red);
	imagefill($im, 100, 100, $blue);
	
	
	header('Content-type: image/png');
	
	imagepng($im);
	
	imagedestroy($im);

	
?>
